<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Property_city;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
     public function index()
    {
        $category = Category::all();  
        return view('super.category.index', compact('category'));  
    }
      public function create()
    {
        $categories = Category::where('pid', 0)->where('status', 't')->get();
        return view('super.category.add', compact('categories'));
    }
    public function store(Request $request)
  {
    $request->validate([
        'cat_title' => 'required|string|max:255',
         
         
         
        'status' => 'required',
    ]);

    $data = $request->all();

    //$slug =strtolower(str_replace(' ', '-', $_POST['cat_title']));

    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['cat_title']), '-'));

    $data['slug'] = $slug;

    if ($request->hasFile('avatar')) {
 
         $extension = $request->avatar->getClientOriginalExtension();
        $uniquePart = rand(99999, 11111);
        $imageName = 'CATIMG_' . $uniquePart . '.' . $extension;
 
        $uploadPath = public_path('storage/category/');
        $request->avatar->move($uploadPath, $imageName);
    
 
    $data['avatar'] = $imageName;
    }
     
    Category::create($data);

    return redirect()->route('super.category.index')->with('success', 'Category created successfully.');
 }
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        $pid = $data->pid;
        $categories = Category::where('pid', 0)->where('status', 't')->get();
        //$parentcategories = Category::where('pid', $pid)->where('cid',0)->where('status', 't')->get(); 
       $parentcategories = Category::where('pid', 1)->where('cid', 0)->where('status', 't')->get();
      // dd($parentcategories);
        return view('super.category.edit', compact('data','categories','parentcategories'));
    }
    public function update(Request $request, $id)
{
     $page = Category::findOrFail($id);
    $request->validate([
      'cat_title' => 'required|string|max:255',  
         
        'status' => 'required',
    ]);

    $data = $request->all();

   
   // $slug =strtolower(str_replace(' ', '-', $_POST['cat_title']));

    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['cat_title']), '-'));

    $data['slug'] = $slug;
    if ($request->hasFile('avatar')) {
      

 $filePath = public_path('storage/category/' . $page->avatar);
    
     if($page->avatar!=''){
    if (file_exists($filePath)) {
        
        unlink($filePath);
    }
   }
    $extension = $request->avatar->getClientOriginalExtension();
        $uniquePart = rand(99999, 11111);
        $imageName = 'CATIMG_' . $uniquePart . '.' . $extension;

        // Define the upload path and move the image
        $uploadPath = public_path('storage/category/');
        $request->avatar->move($uploadPath, $imageName);
 
    $data['avatar'] = $imageName;
    }
    $page->update($data);

    return redirect()->route('super.category.index')->with('success', 'Category updated successfully.');
}

 public function destroy($id)
    {
        $page = Category::findOrFail($id);

         $filePath = public_path('storage/category/' . $page->avatar);
    
     
    if (file_exists($filePath)) {
        
        unlink($filePath);
    }
         
        $page->delete();

        return redirect()->route('super.category.index')->with('success', 'Category  delete successfully.');
    }
     public function getChildCategories($parentId)
    {
    
        $childCategories = Category::where('pid', $parentId)->where('cid',0)->where('status', 't')->get();

        $product = Product::where('cat_id', $parentId)->where('status', 't')->get();

        // Return child categories as a JSON response
       return response()->json([
        'child_categories' => $childCategories,
        'products' => $product
         ]);
    }
    public function getParentCategories($catId)
{
    // Get current category
    $category = Category::find($catId);

    // Return early if not found
    if (!$category) {
        return response()->json([
            'child_categories' => [],
            'products' => []
        ]);
    }

    // Get child categories where cid matches current catId
    $childCategories = Category::where('cid', $catId)
                               ->where('status', 't')
                               ->get();

    // Get products where cat_id = parent (pid) and pid = current catId
    $products = Product::where('cat_id', $category->pid)
                       ->where('pid', $catId)
                       ->where('status', 't')
                       ->get();

    return response()->json([
        'child_categories' => $childCategories,
        'products' => $products
    ]);
}


public function getProductsByClassId($ccatId)
{
    // Optional: Check if category exists
    $category = Category::find($ccatId);
    $pid = $category->pid;
    $cid = $category->cid;

    if (!$category) {
        return response()->json([
            'products' => []
        ]);
    }

    // Get products by class ID
    $products = Product::where('cid', $ccatId)
                       ->where('pid', $cid)
                       ->where('cat_id', $pid)
                       ->where('status', 't')
                       ->get();

    return response()->json([
        'products' => $products
    ]);
}



public function getParentCategoriess(Request $request)
{
    $pid = $request->input('cat_id');

    $mpid = $request->input('main_course_id');

    $childCategories = Category::where('pid', $pid)->where('cid', 0)->where('status', 't')->get();
    $products = Product::where('cat_id', $mpid)->where('pid', $pid)->where('status', 't')->get();

    return response()->json([
        'child_categories' => $childCategories,
        'products' => $products,
    ]);
}

}
