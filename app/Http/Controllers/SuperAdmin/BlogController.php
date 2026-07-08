<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
     public function index()
    {
        $pages = Blog::all();  
        return view('super.blog.index', compact('pages'));  
    }
      public function create()
    {
        return view('super.blog.add');
    }
    public function store(Request $request)
  {
    $request->validate([
        'title' => 'required|string|unique:blog_managment,title',
  
        'avatar' => 'nullable|image',  
         
        'status' => 'required',
    ]);

    $data = $request->all();

    if ($request->hasFile('avatar')) {
 
         $file = $request->file('avatar');
    
 
    $fileName = time() . '-' . $file->getClientOriginalName();
 
    $destinationPath = public_path('storage/blog');
    
 
    $file->move($destinationPath, $fileName);
    
 
    $data['avatar'] = $fileName;
    }
   // $slug =strtolower(str_replace(' ', '-', $_POST['title']));

    $title = $_POST['title'];
// Remove special characters and replace spaces with hyphens
    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', $title));
    $slug = str_replace(' ', '-', $slug);

    $data['slug'] = $slug;

    $data['date'] = date('Y-m-d h:i:s a');


    Blog::create($data);

    return redirect()->route('super.blog.index')->with('success', 'Blog created successfully.');
 }
    public function edit($id)
    {
        $page = Blog::findOrFail($id);
        return view('super.blog.edit', compact('page'));
    }
    public function update(Request $request, $id)
{
     $page = Blog::findOrFail($id);
    $request->validate([
     'title' => 'required|string|unique:blog_managment,title,' . $page->id,

        'avatar' => 'nullable|image',  
         
        'status' => 'required',
    ]);

    $data = $request->all();

    if ($request->hasFile('avatar')) {
      
$filePath = public_path('storage/blog/' . $page->avatar);

if (!empty($page->avatar) && file_exists($filePath) && is_file($filePath)) {
    unlink($filePath);
}
         

         $file = $request->file('avatar');
    
 
    $fileName = time() . '-' . $file->getClientOriginalName();
    
   
    $destinationPath = public_path('storage/blog');
    
 
    $file->move($destinationPath, $fileName);
    
 
    $data['avatar'] = $fileName;
    }
    $title = $_POST['title'];
// Remove special characters and replace spaces with hyphens
    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', $title));
    $slug = str_replace(' ', '-', $slug);

    $data['slug'] = $slug;
    $data['date'] = date('Y-m-d h:i:s a');
    $page->update($data);

    return redirect()->route('super.blog.index')->with('success', 'Blog updated successfully.');
}
 public function destroy($id)
    {
        $page = Blog::findOrFail($id);
         if ($page->avatar) {
           $filePath = public_path('storage/blog/' . $page->avatar);
           
           if (file_exists($filePath)) {
       
        unlink($filePath);
         }
        }
        $page->delete();

        return redirect()->route('super.blog.index')->with('success', 'Blog Delete successfully.');
    }
}
