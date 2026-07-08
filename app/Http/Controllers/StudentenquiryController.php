<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course_board;
use App\Models\Page;
use App\Models\Category;
use App\Models\Product;
use App\Models\Student_Enquiry_Managment;
use App\Models\Student_Enquiry_Course;
use Illuminate\Support\Facades\Storage;

class StudentenquiryController extends Controller
{
     public function index()
    {
        $pages = Student_Enquiry_Managment::all();  
        return view('admin.enquiry.index', compact('pages'));  
    }
      public function teacherenquiry()
    {
         $page = Page::Where('status', 't')->where('slug', 'contact')->first();
         $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();
          $metatitle = $page->meta_title ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $page->meta_description ?? null;
          return view('teacherenquiry', compact('page','metatitle','metakey','metadesc','categories'));
       
    }
    public function teacherenquiryupdate(Request $request)
  {
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|min:10',
       
    ]);

    // 1. Save to student_enquiry_managment
    $managment = Student_Enquiry_Managment::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'date'     => date('Y-m-d'),
        'phone'    => $request->phone,
        'pincode'  => $request->pincode,
        'state'    => $request->state,
        'district' => $request->district,
        'city'     => $request->city,
        'message'  => $request->message,
        'user_id'  =>$request->user_id,
        'budget'   =>$request->budget,
        'for_class'=> $request->for_class,
        'status' => 'f',
    ]);

    // 2. Save course-related rows
  $pids = $request->input('pid', []);
$cids = $request->input('cid', []);
$cat_ids = $request->input('cat_id', []);
$sub_ids = $request->input('sub_id', []);
 
 

    for ($i = 0; $i < count($cat_ids); $i++) {
        Student_Enquiry_Course::create([
            'enquiry_id' => $managment->id,
            'user_id'  => $request->user_id,
            'cat_id' => $cat_ids[$i],
            'pid' => $pids[$i],
            'cid' => $cids[$i],
            'sub_id' => (is_array($sub_ids[$i] ?? null)) ? implode(',', $sub_ids[$i]) : ($sub_ids[$i] ?? null),
        ]);
    }


    $courses = Student_Enquiry_Course::where('enquiry_id', $managment->id)->get();

    //dd($courses);

    $courseTable = "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse'>
        <thead>
            <tr>
                <th>Course</th>
                <th>Board</th>
                <th>Class</th>
                <th>Subjects</th>
            </tr>
        </thead>
        <tbody>";

    foreach ($courses as $course) {
        $courseName = Category::find($course->cat_id)->cat_title ?? 'N/A';
        $boardName  = Category::find($course->pid)->cat_title ?? 'N/A';
        $className  = Category::find($course->cid)->cat_title ?? 'N/A';

        $subjectList = '';
        if (!empty($course->sub_id)) {
            $subjectIds = explode(',', $course->sub_id);
            $subjectList = Product::whereIn('id', $subjectIds)->pluck('title')->implode(', ');
        }

        $courseTable .= "<tr>
            <td>{$courseName}</td>
            <td>{$boardName}</td>
            <td>{$className}</td>
            <td>{$subjectList}</td>
        </tr>";
    }

    $courseTable .= "</tbody></table>";
 
    $to = 'ajayvatsyayanlinkedin@gmail.com';  
    $subject = "New Student Enquiry Received";
    $from = $request->email;

    $message = "
    <html>
    <head><title>New Enquiry</title></head>
    <body>
        <h2>New Student Enquiry Details</h2>
        <p><strong>Name:</strong> {$managment->name}</p>
        <p><strong>Email:</strong> {$managment->email}</p>
        <p><strong>Phone:</strong> {$managment->phone}</p>
        <p><strong>City:</strong> {$managment->city}</p>
        <p><strong>District:</strong> {$managment->district}</p>
        <p><strong>State:</strong> {$managment->state}</p>
        <p><strong>PIN Code:</strong> {$managment->pincode}</p>
        <p><strong>Class Type:</strong> {$managment->for_class}</p>

        <h3>Selected Courses</h3>
        {$courseTable}
    </body>
    </html>
    ";

    $headers  = "From: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    @mail($to, $subject, $message, $headers);

    return response()->json([
        'status' => 'success',
        'message' => '<div class="alert alert-success">Enquiry submitted successfully!</div>',
    ]);
 }
    public function edit($id)
    {
        $page = Course_board::findOrFail($id);
        return view('admin.course_board.edit', compact('page'));
    }
     public function editenquiry($id)
    {
        $page = Student_Enquiry_Managment::findOrFail($id);
         $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();
        $course = Student_Enquiry_Course::where('enquiry_id', $page->id)->get();
        return view('admin.enquiry.edit', compact('page','categories','course'));
    }
    public function update(Request $request, $id)
{
     $page = Course_board::findOrFail($id);
    $request->validate([
        'name' => 'required|string|max:255',
         
        'status' => 'required',
    ]);

    $data = $request->all();
 
    
    $page->update($data);

    return redirect()->route('admin.board.index')->with('success', 'Course board updated successfully.');
}
public function updateenquiry(Request $request, $id)
{
     $page = Student_Enquiry_Managment::findOrFail($id);
    $request->validate([
        'name' => 'required|string|max:255',
         
        'status' => 'required',
    ]);

    $data = $request->all();
 
    
    $page->update($data);

    return redirect()->route('admin.enquiry.index')->with('success', 'Enquiry updated successfully.');
}
 public function destroy($id)
    {
        $page = Course_board::findOrFail($id);
          
        $page->delete();

        return redirect()->route('admin.board.index')->with('success', 'Course board Delete successfully.');
    }
}
