<?php


namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;
 
class PageController extends Controller
{
     public function index()
    {
        $pages = Page::all();  
        return view('super.pages.index', compact('pages'));  
    }
      public function create()
    {
        return view('super.pages.add');
    }
    public function store(Request $request)
  {
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|unique:pages,slug',
        'content' => 'nullable|string',
        'main_title' => 'required|string',
        'avatar' => 'nullable|image',  
        'meta_keywords' => 'nullable|string',
        'meta_description' => 'nullable|string',
        'status' => 'required',
    ]);

    $data = $request->all();

    if ($request->hasFile('avatar')) {
        // $avatarPath = $request->file('avatar')->store('avatars', 'public');  
        // $data['avatar'] = basename($avatarPath);
         $file = $request->file('avatar');
    
    // Generate a unique filename to prevent overwriting
    $fileName = time() . '-' . $file->getClientOriginalName();
    
    // Define the target directory path
    $destinationPath = public_path('storage/avatars');
    
    // Move the file to the destination
    $file->move($destinationPath, $fileName);
    
    // Store the file name in the database
    $data['avatar'] = $fileName;
    }

    Page::create($data);

    return redirect()->route('super.page.index')->with('success', 'Page created successfully.');
 }
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('super.pages.edit', compact('page'));
    }
    public function update(Request $request, $id)
{
     $page = Page::findOrFail($id);
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|unique:pages,slug,' . $page->id,
        'content' => 'nullable|string',
        'main_title' => 'nullable|string',
        'avatar' => 'nullable|image', // Validate image
        'meta_keywords' => 'nullable|string',
        'meta_description' => 'nullable|string',
    ]);

    $data = $request->all();

    if ($request->hasFile('avatar')) {
        if ($page->avatar) {
           $filePath = public_path('storage/avatars/' . $page->avatar);
           if (file_exists($filePath)) {
     
            unlink($filePath);
           }
           // \Storage::delete('public/' . $page->avatar);
           //  \Storage::disk('public')->delete('avatars/' . $page->avatar);
        }

        // $avatarPath = $request->file('avatar')->store('avatars', 'public');
        // $data['avatar'] = basename($avatarPath);
         $file = $request->file('avatar');
    
 
    $fileName = time() . '-' . $file->getClientOriginalName();
    
   
    $destinationPath = public_path('storage/avatars');
    
 
    $file->move($destinationPath, $fileName);
    
 
    $data['avatar'] = $fileName;
    }

    $page->update($data);

    return redirect()->route('super.page.index')->with('success', 'Page updated successfully.');
}
 public function destroy($id)
    {
        $page = Page::findOrFail($id);
         if ($page->avatar) {
           
           // \Storage::delete('public/' . $page->avatar);
           // \Storage::disk('public')->delete('avatars/' . $page->avatar);
            $filePath = public_path('storage/avatars/' . $page->avatar);
           if (file_exists($filePath)) {
     
            unlink($filePath);
           }
        }
        $page->delete();

        return redirect()->route('super.page.index')->with('success', 'Page Delete successfully.');
    }

    
}
