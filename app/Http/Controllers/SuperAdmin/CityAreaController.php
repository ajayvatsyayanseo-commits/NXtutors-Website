<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\City_area;
use App\Models\City_area_course;
use App\Models\City_area_faqs;
use App\Models\Category;
use App\Models\City_area_review;
use Illuminate\Support\Facades\Storage;

class CityAreaController extends Controller
{
     public function index()
    {
        $pages = City_area::all();  
        return view('super.cityarea.index', compact('pages'));  
    }
    
     public function indexsubadmin()
    {
        $pages = City_area::all();  
        return view('subsuper.cityarea.index', compact('pages'));  
    }
      public function create()
    {
        $city = City::all();
        $maincityarea  = City_area::where('areapid', 0)->where('status', 't')->get();
        $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();   
        return view('super.cityarea.add', compact('city','maincityarea','categories'));
    }
    
       public function subadmincreate()
    {
        $city = City::all();
        $maincityarea  = City_area::where('areapid', 0)->where('status', 't')->get();
        $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();   
        return view('subsuper.cityarea.add', compact('city','maincityarea','categories'));
    }

    
  public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'status' => 'required',
    ]);

    $data = $request->all();

    //dd($data);

    // Generate slug from city name (note: use proper input key)
   // $slug = strtolower(str_replace(' ', '-', $request->input('name')));
    $title =$_POST['name'];
    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', $title));
    $slug = str_replace(' ', '-', $slug);
    $data['slug'] = $slug;
 
    $cityArea = City_area::create($data);

     
    $area_id = $cityArea->id;

    $cat_ids = $request->input('cat_id', []);
    $pids = $request->input('pid', []);
    $cids = $request->input('cid', []);
    $sub_ids = $request->input('sub_id', []);
    $question = $request->input('question', []);
    $answer = $request->input('answer', []);
    
    $usertype = $request->input('usertype');
        $username = $request->input('username', []);

    $rating = $request->input('rating', []);

    $location = $request->input('location', []);

    $date =  date('Y-m-d');

    $message = $request->input('message', []);

    $review_status = $request->input('review_status', []);

 
    // for ($i = 0; $i < count($cat_ids); $i++) {
    //     $datacourse = [
    //         'area_id' => $area_id,
    //         'cat_id' => $cat_ids[$i],
    //         'pid' => $pids[$i] ?? null,
    //         'cid' => $cids[$i] ?? null,
    //         'sub_id' => is_array($sub_ids[$i] ?? null) ? implode(',', $sub_ids[$i]) : ($sub_ids[$i] ?? null),
    //     ];
    //     City_area_course::create($datacourse);
    // }
for ($a = 0; $a < count($username); $a++) {
        $datareview = [
            'area_id' => $area_id,
            'date' => $date,
            'username' => $username[$a],
            'rating' => $rating[$a],
            'location' => $location[$a],
            'message' => $message[$a],
            'review_status' => $review_status[$a],

        ];

       
            City_area_review::create($datareview);
      
        
    }
 
    for ($a = 0; $a < count($question); $a++) {
        $datafaqs = [
            'area_id' => $area_id,
            'question' => $question[$a],
            'answer' => $answer[$a],
        ];
        City_area_faqs::create($datafaqs);
    }
    if($usertype=='subadmin'){
    return redirect()->route('subsuper.cityarea.index')->with('success', 'City area created successfully.');
    }
    else
    {
        return redirect()->route('super.cityarea.index')->with('success', 'City area created successfully.');
    }
}

    public function edit($id)
    {
        $page = City_area::findOrFail($id);
        $city = City::all();
        $maincityarea  = City_area::where('areapid', 0)->where('status', 't')->get();
        $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();
        return view('super.cityarea.edit', compact('page','city','maincityarea','categories'));
    }


     public function editsubadmin($id)
    {
        $page = City_area::findOrFail($id);
        $city = City::all();
        $maincityarea  = City_area::where('areapid', 0)->where('status', 't')->get();
        $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();
        return view('subsuper.cityarea.edit', compact('page','city','maincityarea','categories'));
    }
    public function update(Request $request, $id)
{
     $page = City_area::findOrFail($id);


    $request->validate([
        'name' => 'required|string|max:255',
 
        'status' => 'required',
    ]);

    $data = $request->all();
 
   // $slug = strtolower(str_replace(' ', '-', $request->input('name')));

    $title =$_POST['name'];
    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', $title));
    $slug = str_replace(' ', '-', $slug);
    $data['slug'] = $slug;
   // dd($data);
    $page->update($data);

    $area_id = $id;

    $cat_ids = $request->input('cat_id', []);
    $pids = $request->input('pid', []);
    $cids = $request->input('cid', []);
    $sub_ids = $request->input('sub_id', []);
    $question = $request->input('question', []);
    $answer = $request->input('answer', []);
    $usertype = $request->input('usertype');
    $city_course_id = $request->input('city_course_id', []);

    $city_faqs_id = $request->input('city_faqs_id', []);

    $username = $request->input('username', []);

    $rating = $request->input('rating', []);

    $location = $request->input('location', []);

    $date =  date('Y-m-d');

    $message = $request->input('message', []);

    $review_status = $request->input('review_status', []);

    $city_area_review_id = $request->input('city_area_review_id', []);
 
    // for ($i = 0; $i < count($cat_ids); $i++) {
    //     $datacourse = [
    //         'area_id' => $area_id,
    //         'cat_id' => $cat_ids[$i],
    //         'pid' => $pids[$i] ?? null,
    //         'cid' => $cids[$i] ?? null,
    //         'sub_id' => is_array($sub_ids[$i] ?? null) ? implode(',', $sub_ids[$i]) : ($sub_ids[$i] ?? null),
    //     ];

    //     if (!empty($city_course_id[$i])) {
    //         City_area_course::where('id', $city_course_id[$i])
    //             ->update($datacourse);
    //     } else {
    //         City_area_course::create($datacourse);
    //     }
         
    // }

 
    for ($a = 0; $a < count($username); $a++) {
        $datareview = [
            'area_id' => $area_id,
            'date' => $date,
            'username' => $username[$a],
            'rating' => $rating[$a],
            'location' => $location[$a],
            'message' => $message[$a],
            'review_status' => $review_status[$a],

        ];

        if (!empty($city_area_review_id[$a])) {
            City_area_review::where('id', $city_area_review_id[$a])
                ->update($datareview);
        } else {
            City_area_review::create($datareview);
        }
        
    }

     for ($a = 0; $a < count($question); $a++) {
        $datafaqs = [
            'area_id' => $area_id,
            'question' => $question[$a],
            'answer' => $answer[$a],
        ];

        if (!empty($city_faqs_id[$a])) {
            City_area_faqs::where('id', $city_faqs_id[$a])
                ->update($datafaqs);
        } else {
            City_area_faqs::create($datafaqs);
        }
        
    }
 
    if($usertype=="subadmin"){
    return redirect()->route('subsuper.cityarea.index')->with('success', 'City area updated successfully.');
    }
    else
    {
        return redirect()->route('super.cityarea.index')->with('success', 'City area updated successfully.');
    }
}
public function destroy($id)
{
    $area = City_area::findOrFail($id);

 
    $area->courses()->delete();
    $area->faqs()->delete();

    $area->delete();

    return redirect()->route('super.cityarea.index')->with('success', 'City Area deleted successfully.');
}

public function destroysubadmin($id)
{
    $area = City_area::findOrFail($id);

 
    $area->courses()->delete();
    $area->faqs()->delete();

    $area->delete();

    return redirect()->route('subsuper.cityarea.index')->with('success', 'City Area deleted successfully.');
}

public function citycoursedestroy($id)
    {
 
         $page = City_area_course::find($id);

    if (!$page) {
        return response()->json([
            'success' => false,
            'message' => 'Course not found.'
        ], 404);
    }

    $page->delete();

    return response()->json([
        'success' => true,
        'message' => 'Course deleted successfully.'
    ]);
    }

    public function cityfaqsdestroy($id)
    {
 
    $page = City_area_faqs::find($id);

    if (!$page) {
        return response()->json([
            'success' => false,
            'message' => 'Faqs not found.'
        ], 404);
    }

    $page->delete();

    return response()->json([
        'success' => true,
        'message' => 'Faqs deleted successfully.'
    ]);
    }

    public function cityreviewdestroy($id)
    {
 
    $page = City_area_review::find($id);

    if (!$page) {
        return response()->json([
            'success' => false,
            'message' => 'Review not found.'
        ], 404);
    }

    $page->delete();

    return response()->json([
        'success' => true,
        'message' => 'Review deleted successfully.'
    ]);
    }

    // public function singlecitycontentpage($citySlug, $contentSlug, $areaSlug)
    // {
    //    $rows = City::Where('status', 't')->where('slug', $citySlug)->first();
    //    $citryarea  =City_area::Where('status', 't')->where('city_id', $rows->id)->where('slug', $contentSlug)->first();
    //    $citrysubareacount  =City_area::Where('status', 't')->where('areapid', $citryarea->id)->where('city_id', $rows->id)->count(); 
    //    $citrysubarea  =City_area::Where('status', 't')->where('areapid', $citryarea->id)->where('city_id', $rows->id)->orderBy('id', 'DESC')->get();
    //    $metatitle = $rows->meta_title ?? null;
    //   $metakey = $rows->meta_key ?? null;
    //   $metadesc = $rows->meta_desc ?? null;
    //    return view('singlecityarea', compact('rows','metatitle','metakey','metadesc','citrysubareacount','citrysubarea', 'citryarea'));
    // }
 public function singlecitycontentpage($citySlug, $contentSlug = null, $areaSlug = null)
{
    $rows = City::where('status', 't')->where('slug', $citySlug)->firstOrFail();

    // Fetch parent area
    $citryarea = null;
    if ($contentSlug) {
        $citryarea = City_area::where('status', 't')
            ->where('city_id', $rows->id)
            ->where('slug', $contentSlug)
            ->firstOrFail();
    }

  
    $childArea = null;
    if ($areaSlug) {
        $childArea = City_area::where('status', 't')
            ->where('city_id', $rows->id)
            ->where('slug', $areaSlug)
            ->where('areapid', $citryarea->id) // Ensure correct parent-child relation
            ->firstOrFail();
    }

  
    $displayArea = $childArea ?? $citryarea;

    
    $citrysubareacount = 0;
    $citrysubarea = collect();
    if (!$areaSlug && $citryarea) {
        $citrysubareacount = City_area::where('status', 't')
            ->where('areapid', $citryarea->id)
            ->where('city_id', $rows->id)
            ->count();

        $citrysubarea = City_area::where('status', 't')
            ->where('areapid', $citryarea->id)
            ->where('city_id', $rows->id)
            ->orderBy('id', 'DESC')
            ->get();
    }

    $metatitle = $rows->meta_title ?? null;
    $metakey = $rows->meta_key ?? null;
    $metadesc = $rows->meta_desc ?? null;

    return view('singlecityarea', compact(
        'rows', 'metatitle', 'metakey', 'metadesc',
        'citrysubareacount', 'citrysubarea', 'displayArea','citryarea','childArea'
    ));
}



}
