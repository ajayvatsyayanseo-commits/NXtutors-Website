<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Teacher_review;
use Illuminate\Support\Facades\Storage;

class CityController extends Controller
{
     public function index()
    {
        $pages = City::all();  
        return view('super.city.index', compact('pages'));  
    }
      public function create()
    {
        return view('super.city.add');
    }

    public function teacherreviewlist()
    {
     $pages = Teacher_review::all();  
      return view('super.user.reviewindex', compact('pages'));  
    }
    public function teacherfeedback(Request $request){

        $data = $request->all();
        $data['date'] = date('Y-m-d');
        $data['status'] = 't';
        Teacher_review::create($data);

        return response()->json(['message' => '<div class="alert alert-success">Thanks for share your feedback.</div>']);

    }
    public function store(Request $request)
  {
    $request->validate([
        'city_name' => 'required|string|max:255', 
 
        
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif',  
         
        'status' => 'required',
    ]);

    $data = $request->all();

 

    if ($request->hasFile('avatar')) {
 
    
        $extension = $request->avatar->getClientOriginalExtension();
        $uniquePart = rand(99999, 11111);
        $imageName = 'CITYIMG_' . $uniquePart . '.' . $extension;

         
        $uploadPath = public_path('storage/city/');
        $request->avatar->move($uploadPath, $imageName);
    
 
    $data['avatar'] = $imageName;
    }
    $slug =strtolower(str_replace(' ', '-', $_POST['city_name']));

    $data['slug'] = $slug;


    City::create($data);

    return redirect()->route('super.city.index')->with('success', 'City created successfully.');
 }
    public function edit($id)
    {
        $page = City::findOrFail($id);
        return view('super.city.edit', compact('page'));
    }
    public function update(Request $request, $id)
{
     $page = City::findOrFail($id);
    $request->validate([
        'city_name' => 'required|string|max:255',

 
        
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif',  
         
        'status' => 'required',
    ]);

    $data = $request->all();

    if ($request->hasFile('avatar')) {
      

 $filePath = public_path('storage/city/' . $page->avatar);
    
     
    if (file_exists($filePath)) {
        
        unlink($filePath);
    }
   
    $extension = $request->avatar->getClientOriginalExtension();
        $uniquePart = rand(99999, 11111);
        $imageName = 'CITYIMG_' . $uniquePart . '.' . $extension;

        // Define the upload path and move the image
        $uploadPath = public_path('storage/city/');
        $request->avatar->move($uploadPath, $imageName);
 
    $data['avatar'] = $imageName;
    }
    $slug = strtolower(str_replace(' ', '-', $_POST['city_name']));
    $data['slug'] = $slug;
    $page->update($data);

    return redirect()->route('super.city.index')->with('success', 'City updated successfully.');
}
 public function destroy($id)
    {
        $page = City::findOrFail($id);
         if ($page->avatar) {
           $filePath = public_path('storage/city/' . $page->avatar);
           
           if (file_exists($filePath)) {
       
        unlink($filePath);
         }
        }
        $page->delete();

        return redirect()->route('super.city.index')->with('success', 'City Delete successfully.');
    }
}
