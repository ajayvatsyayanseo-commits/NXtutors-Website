<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
     public function index()
    {
        $pages = Banner::all();  
        return view('super.banner.index', compact('pages'));  
    }
      public function create()
    {
        return view('super.banner.add');
    }
    public function store(Request $request)
  {
    $request->validate([
        'title' => 'required|string|max:255', 
        'sub_title' => 'required|string|max:255',  
        
        'avatar' => 'nullable|image',  
         
        'status' => 'required',
    ]);

    $data = $request->all();

 

    if ($request->hasFile('avatar')) {
 
    //      $file = $request->file('avatar');
    
 
    // $fileName = time() . '-' . $file->getClientOriginalName();
 
    // $destinationPath = public_path('storage/banner');
    
 
    // $file->move($destinationPath, $fileName);
        $extension = $request->avatar->getClientOriginalExtension();
        $uniquePart = rand(99999, 11111);
        $imageName = 'BANNERIMG_' . $uniquePart . '.' . $extension;

        // Define the upload path and move the image
        $uploadPath = public_path('storage/banner/');
        $request->avatar->move($uploadPath, $imageName);
    
 
    $data['avatar'] = $imageName;
    }
    // $slug =strtolower(str_replace(' ', '-', $_POST['title']));

    // $data['slug'] = $slug;


    Banner::create($data);

    return redirect()->route('super.banner.index')->with('success', 'Banner created successfully.');
 }
    public function edit($id)
    {
        $page = Banner::findOrFail($id);
        return view('super.banner.edit', compact('page'));
    }
    public function update(Request $request, $id)
{
     $page = Banner::findOrFail($id);
    $request->validate([
        'title' => 'required|string|max:255',

       // 'sub_title' => 'required|string|max:255',  
        
        'avatar' => 'nullable|image',  
         
        'status' => 'required',
    ]);

    $data = $request->all();

    if ($request->hasFile('avatar')) {
      

 $filePath = public_path('storage/banner/' . $page->avatar);
    
     
    if (file_exists($filePath)) {
        
        unlink($filePath);
    }
   
    $extension = $request->avatar->getClientOriginalExtension();
        $uniquePart = rand(99999, 11111);
        $imageName = 'BANNERIMG_' . $uniquePart . '.' . $extension;

        // Define the upload path and move the image
        $uploadPath = public_path('storage/banner/');
        $request->avatar->move($uploadPath, $imageName);
 
    $data['avatar'] = $imageName;
    }
    
    $page->update($data);

    return redirect()->route('super.banner.index')->with('success', 'Banner updated successfully.');
}
 public function destroy($id)
    {
        $page = Banner::findOrFail($id);
         if ($page->avatar) {
           $filePath = public_path('storage/banner/' . $page->avatar);
           
           if (file_exists($filePath)) {
       
        unlink($filePath);
         }
        }
        $page->delete();

        return redirect()->route('super.banner.index')->with('success', 'Banner Delete successfully.');
    }
}
