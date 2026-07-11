<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Register;
use App\Models\Setting;
use App\Models\Wish;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;
use App\Models\Teacher_review;
use App\Models\Teacher_courses;
use App\Models\Student_Enquiry_Managment;
use App\Models\Student_Enquiry_Course;
use App\Models\Teacher_course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\Services\OpenAiTeacherGenerator;

class RegisterController extends Controller
{
     public function index()
    {
        $pages = Register::where('join_as', 'student')->get();
                 return view('super.user.index', compact('pages'));  
    }
  
  public function teacherreviewlist()
    {
     $pages = Teacher_review::all();  
      return view('super.user.reviewindex', compact('pages'));  
    }

    public function indexteacher()
    {
        $pages = Register::where('join_as', 'teacher')->orderBy('id', 'DESC')->get();
                 return view('super.user.teacherindex', compact('pages')); 
    }
      public function create()
  
    {
        return view('super.user.add');
    }

    public function teachergenerate()
    {
        // agar aap master subjects/boards table rakhte ho to yaha fetch kar lo
        // $subjects = DB::table('subjects_master')->where('status','t')->get();
        // $boards   = DB::table('boards_master')->where('status','t')->get();

        $subjects = [];
        $boards = [];

        return view('super.user.generate', compact('subjects', 'boards'));
    }

    
public function teacherGenerateStore(Request $request, OpenAiTeacherGenerator $gen)
{
    $data = $request->validate([
        'pincode'   => 'required|string|max:10',
        'area'      => 'required|string|max:120',
        'city'      => 'required|string|max:120',
        'district'  => 'nullable|string|max:120',
        'state'     => 'required|string|max:120',

        'for_class' => 'required|string|max:120',
        'class_type'=> 'required|string|max:50',

        'subjects'  => 'required|array|min:1',
        'subjects.*'=> 'string|max:60',

        'boards'    => 'required|array|min:1',
        'boards.*'  => 'string|max:60',
    ]);

    // ✅ normalize arrays
    $data['subjects'] = array_values(array_filter($data['subjects']));
    $data['boards']   = array_values(array_filter($data['boards']));
    $data['main_subject'] = $data['subjects'][0] ?? '';

    // ✅ 1) AI Generate
    try {
        $ai = $gen->generate($data);
    } catch (\Throwable $e) {
        Log::error("AI generation failed", ['msg' => $e->getMessage()]);
        return back()->withErrors('AI generation failed: ' . $e->getMessage())->withInput();
    }

    // ✅ 2) Ensure avatar exists
    if (empty($ai['avatar_path'])) {
        $ai['avatar_path'] = $this->generateTutorAvatar();
    }

    // ✅ 3) Insert DB with full error handling
    try {
        DB::transaction(function () use ($data, $ai) {

            // ✅ numeric user_id generate (1000+)
            $last = Register::orderBy('id', 'desc')->first();
            $userId = (!$last || empty($last->user_id)) ? 1000 : ((int)$last->user_id + 1);

            $profile     = $this->asString(data_get($ai, 'tutor.profile'));
            $profileDesc = $this->asString(data_get($ai, 'tutor.profile_desc'));
            $profile = $this->limit($profile, 250);

            // ✅ Register insert 
            Register::create([
                'user_id' => (string)$userId,
                'name' => data_get($ai, 'tutor.name'),
               // 'gender' => 'male',
                'gender' => data_get($ai, 'tutor.gender'),
                'avatar' => $ai['avatar_path'] ?? null,

                'date' => now()->format('Y-m-d'),
                'address' => $data['area'],
                'city' => $data['city'],
                'district' => $data['district'] ?? $data['city'],
                'state' => $data['state'],
                'pincode' => $data['pincode'],

                'status' => 't',
                'otp_status' => 't',
                'user_type' => 'teacher',
                'join_as' => 'teacher',
                'for_class' => $data['for_class'],

                'degree' => data_get($ai, 'tutor.degree'),
                'experience' => data_get($ai, 'tutor.experience'),
                'education' => data_get($ai, 'tutor.education'),
                'class_type' => $data['class_type'],
                'budget' => data_get($ai, 'tutor.budget'),

                'profile' => $profile,
                'profile_desc' => $profileDesc,
            ]);

            // ✅ Reviews insert (30)
            $reviewRows = [];
            foreach (array_slice(($ai['reviews'] ?? []), 0, 30) as $r) {

    $reviewRows[] = [
        'name' => $r['reviewer_name'] ?? 'Student',
        'user_id' => (string)$userId,

        // ✅ FORCE numeric values
        'rating' => (string)($r['rating'] ?? 5),
        'expertise' => $this->normalizeRating($r['expertise'] ?? 5),
        'patience' => $this->normalizeRating($r['patience'] ?? 5),
        'reliability' => $this->normalizeRating($r['reliability'] ?? 5),
        'communication' => $this->normalizeRating($r['communication'] ?? 5),

        'message' => $r['message'] ?? '',
        'date' => now()->format('Y-m-d'),
        'status' => 't',
    ];
}
            if (!empty($reviewRows)) {
                Teacher_review::insert($reviewRows);
            }

            // ✅ Courses insert (subjects × boards)
            $courseRows = [];
            foreach ($data['subjects'] as $sub) {
                foreach ($data['boards'] as $board) {
                    $courseRows[] = [
                        'user_id' => (string)$userId,
                        'subject' => $sub,
                        'board' => $board,
                        'for_class' => $data['for_class'],
                        'class_type' => $data['class_type'],
                        'mode' => 'Tutoring',
                        'status' => 't',
                        'date' => now()->format('Y-m-d'),
                    ];
                }
            }
            if (!empty($courseRows)) {
                Teacher_courses::insert($courseRows);
            }
        });

    } catch (\Throwable $e) {
        Log::error("Teacher insert failed", [
            'msg' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
        ]);
        return back()->withErrors("DB Error: " . $e->getMessage())->withInput();
    }

    return redirect()
        ->route('super.teacher.index')
        ->with('success', 'Teacher generated successfully with 30 SEO reviews + courses!');
}

// ✅ helper MUST be inside SAME Controller class (paste below method, before last })
private function safeJsonDecode(string $text)
{
    $text = trim($text);

    $data = json_decode($text, true);
    if (json_last_error() === JSON_ERROR_NONE) return $data;

    if (preg_match('/(\{.*\}|\[.*\])/s', $text, $m)) {
        $data = json_decode($m[1], true);
        if (json_last_error() === JSON_ERROR_NONE) return $data;
    }

    return null;
}

private function normalizeRating($value): int
{
    if (is_numeric($value)) {
        return max(1, min(5, (int)$value));
    }

    $map = [
        'poor' => 2,
        'average' => 3,
        'good' => 4,
        'very good' => 5,
        'excellent' => 5,
        'outstanding' => 5,
        'very patient' => 5,
        'patient' => 4,
        'moderately patient' => 3,
        'reliable' => 4,
        'always reliable' => 5,
        'generally reliable' => 4,
        'clear communication' => 5,
        'good communication' => 4,
        'excellent communication' => 5,
    ];

    $key = strtolower(trim($value));
    return $map[$key] ?? 5;
}

private function generateTutorAvatar(): ?string
{
    try {
        $apiKey = config('services.openai.key');
        if (!$apiKey) {
            Log::error("OPENAI_API_KEY missing");
            return null;
        }

        $response = Http::withToken($apiKey)
            ->connectTimeout((int) config('services.openai.connect_timeout', 10))
            ->timeout((int) config('services.openai.timeout', 90))
            ->retry((int) config('services.openai.retry_times', 1), 750, throw: false)
            ->post('https://api.openai.com/v1/images/generations', [
                'model'  => config('services.openai.image_model', 'gpt-image-1.5'),
                'prompt' => 'Realistic professional portrait photo of an Indian male teacher, age 28-40, formal shirt, friendly smile, plain light background, passport size, high quality.',
                'size'   => '1024x1024',
                'n'      => 1,

                // ❌ remove response_format (gpt-image-1 doesn't accept it)
            ]);

        if (!$response->ok()) {
            Log::warning('OpenAI fallback image generation failed.', [
                'status' => $response->status(),
            ]);
            return null;
        }

        $b64 = data_get($response->json(), 'data.0.b64_json');
        if (!$b64) {
            Log::warning('OpenAI fallback image response did not contain image data.');
            return null;
        }

        // ✅ strict decode
        $binary = base64_decode($b64, true);
        if ($binary === false) {
            Log::error("base64_decode failed");
            return null;
        }

        // ✅ SAME DIR AS YOUR MANUAL UPLOAD
        $dir = public_path('storage/user');
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0755, true) && !is_dir($dir)) {
                Log::error("Failed to create directory", ['dir' => $dir]);
                return null;
            }
        }

        $fileName = 'avatar_' . time() . '_' . Str::random(6) . '.png';
        $saved = file_put_contents($dir . DIRECTORY_SEPARATOR . $fileName, $binary);

        if ($saved === false) {
            Log::error("file_put_contents failed", [
                'path' => $dir . DIRECTORY_SEPARATOR . $fileName
            ]);
            return null;
        }

        return $fileName; // ✅ DB me only filename

    } catch (\Throwable $e) {
        Log::warning('Fallback avatar generation exception.', [
            'exception' => $e::class,
            'message' => (string) str($e->getMessage())->squish()->limit(160),
        ]);
        return null;
    }
}





     public function teachercreate()
  
    {
        return view('super.user.addteacher');
    }
    public function store(Request $request)
  {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:register,email',
        'phone' => 'required|numeric|unique:register,phone',
         'password' => 'required|string|min:4|confirmed',
        'address' => 'nullable|string',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:t,f',
    ]);

    $data = $request->all();

    if ($request->hasFile('avatar')) {
 
         $file = $request->file('avatar');
    
 
    $fileName = time() . '-' . $file->getClientOriginalName();
 
    $destinationPath = public_path('storage/user');
    
 
    $file->move($destinationPath, $fileName);
    
 
    $data['avatar'] = $fileName;
    }

    $page = Register::orderBy('id', 'desc')
                 ->first();  
    if (!$page || empty($page->user_id)) {  
    $user_id = 1000;  
} else {
    $user_id = $page->user_id + 1;  
}

    $password  =Hash::make($_POST['password']);

    $data['password'] = $password;

    $data['user_id'] = $user_id;

    $data['c_password'] = $password;

    $data['date'] = date('Y-m-d, h:i:s a');


    Register::create($data);

    return redirect()->route('super.user.index')->with('success', 'Student created successfully.');
 }

  public function teacherstore(Request $request)
  {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:register,email',
        'phone' => 'required|numeric|unique:register,phone',
         'password' => 'required|string|min:4|confirmed',
        'address' => 'nullable|string',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:t,f',
    ]);

    $data = $request->all();

    if ($request->hasFile('avatar')) {
 
         $file = $request->file('avatar');
    
 
    $fileName = time() . '-' . $file->getClientOriginalName();
 
    $destinationPath = public_path('storage/user');
    
 
    $file->move($destinationPath, $fileName);
    
 
    $data['avatar'] = $fileName;
    }

    $page = Register::orderBy('id', 'desc')
                 ->first();  
    if (!$page || empty($page->user_id)) {  
    $user_id = 1000;  
} else {
    $user_id = $page->user_id + 1;  
}

    $password  =Hash::make($_POST['password']);

    $data['password'] = $password;

    $data['user_id'] = $user_id;

    $data['c_password'] = $password;

    $data['date'] = date('Y-m-d, h:i:s a');


    Register::create($data);

    return redirect()->route('super.user.index')->with('success', 'Teacher created successfully.');
 }
 
        public function userstore(Request $request)
  {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:register,email',
        'phone' => 'required|numeric|unique:register,phone',
         
    ]);

    $data = $request->all();

    // if ($request->hasFile('avatar')) {
 
    //      $file = $request->file('avatar');
    
 
    // $fileName = time() . '-' . $file->getClientOriginalName();
 
    // $destinationPath = public_path('storage/user');
    
 
    // $file->move($destinationPath, $fileName);
    
 
    // $data['avatar'] = $fileName;
    // }
    $otp = rand(9999, 1111);
    $page = Register::orderBy('id', 'desc')
                 ->first();  
    if (!$page || empty($page->user_id)) {  
    $user_id = 1000;  
} else {
    $user_id = $page->user_id + 1;  
}
    $name = $_POST['name'];
    $password  =Hash::make($_POST['cpass_id']);

    $data['password'] = $password;

    $data['user_id'] = $user_id;

    $data['otp'] = $otp;

    session(['emails' => $request->email]);

     $data['otp_status'] = 'f';
     $data['status'] = 'f';

    $data['c_password'] = $password;

    $data['date'] = date('Y-m-d, h:i:s a');

    $subject = "Otp verification ";

    $to = $_POST['email'];
    
    $setting = Setting::first();

    $from = $setting->email;

$message = view('emails.otp', compact('name', 'otp' ))->render();
       $headers = "From: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $mailss = mail($to, $subject, $message, $headers);
    Register::create($data);
    return response()->json(['message' => '<div class="alert alert-success">We send an OTP on your email address for verification.</div>']);
 }   

 public function checkEmail(Request $request)
{
    $emailExists = Register::where('email', $request->email)->exists();
    return response()->json(['exists' => $emailExists]);
}
public function checkPhone(Request $request)
{
    $phoneExists = Register::where('phone', $request->phone)->exists();
    return response()->json(['exists' => $phoneExists]);
}

public function checkOtp(Request $request)
{
    
    $user = Register::where('email', session('emails'))->first();

    $sessionOtp = $user->otp;

    // Check if the OTP provided by the user matches the one stored in the session
    $otpExists = $sessionOtp && $sessionOtp == $request->otp;
    
    // Return a JSON response indicating whether the OTP is valid
    return response()->json(['exists' => $otpExists]);
}


public function echeckOtp(Request $request)
{
    
    $user = Student_Enquiry_Managment::where('email', session('emails'))->first();

    $sessionOtp = $user->eotp;

    // Check if the OTP provided by the user matches the one stored in the session
    $otpExists = $sessionOtp && $sessionOtp == $request->eotp;
    
    // Return a JSON response indicating whether the OTP is valid
    return response()->json(['exists' => $otpExists]);
}

 

public function userlogin(Request $request)
{
    // Validate the request data
    $request->validate([
        'email' => 'required|email',
        'pass' => 'required',
    ]);

    $email = $request->email;
    $password = $request->input('pass');

    // Find the user by email
    $user = Register::where('email', $email)->first();

    // Check if user exists and passwords match
    if ($user && Hash::check($password, $user->password)) {
        if ($user->otp_status == 't') {
            if($user->status=='t')
            {

            session(['email' => $user->email, 'userid' => $user->user_id , 'join_as' => $user->join_as]);

                // if (session()->has('currLoc')) {
                //     return redirect(session('currLoc'));
                // }
            // if ($currLoc = session('currLoc')) {
            //     return redirect()->to($currLoc);
            // }

            if (session()->has('intended_plan_id')) {
                $planId = session('intended_plan_id');
                session()->forget('intended_plan_id');

                return response()->json([
                    'success' => true,
                    'message' => 'Login successful. Redirecting to checkout.',
                    'redirect' => route('subscription.checkout', $planId),
                ]);
            }
            if($user->join_as=='teacher') {
            $redirectUrl = session('currLoc', 'teacher/dashboard');
            }
            else {
            $redirectUrl = session('currLoc', 'user/dashboard');
             }
            
            // return response()->json(['success' => true, 'message' => 'Login successful. Redirecting to dashboard.']);

            return response()->json([
                'success' => true,
                'message' => 'Login successful. Redirecting to dashboard.',
                'redirect' => $redirectUrl // Send the redirect URL back to the client
            ]);
             session()->forget('currLoc');
            }
            else
            {
                 return response()->json(['error' => 'Your account is inactive or block.'], 401);
            }
        } else {
            // Generate a new OTP
            $otp = rand(1000, 9999);
            $user->otp = $otp;
            $user->save();

            // Send OTP email
            session(['emails' => $email]);
            $subject = "OTP Verification";
            $to = $email;

            $name = $user->name;

            $setting = Setting::first();
            $from = $setting->email;

            $message = view('emails.otp', compact('name', 'otp' ))->render();
            $headers = "From: $from\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            if (mail($to, $subject, $message, $headers)) {
    return response()->json(['success' => true, 'message' => 'We sent an OTP to your email address for verification.']);
} else {
    return response()->json(['success' => false, 'error' => 'Failed to send OTP. Please try again later.']);
}
        }
    }

     else {
        return response()->json(['error' => 'Invalid credentials.'], 401);
    }
}  

public function userforget(Request $request){
  $step = $request->input('step', 1); // default to step 1

    // Step 1: Validate email and send OTP
    if ($step == 1) {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = Register::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['success' => false, 'error' => 'Email not found.']);
        }

        $otp = rand(1000, 9999);
        $user->otp = $otp;
        $user->otp_status = 'f'; // f = pending for forget
        $user->save();

        session(['forget_email' => $request->email]);

        // Send OTP email
        $subject = "Password Reset OTP";
        $to = $request->email;
        $name = $user->name;
        $setting = Setting::first();
        $from = $setting->email ?? 'noreply@example.com';

        $message = view('emails.otp', compact('name', 'otp'))->render();
        $headers = "From: $from\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($to, $subject, $message, $headers)) {
            return response()->json([
                'success' => true,
                'message' => 'OTP sent to your email.',
            ]);
        } else {
            return response()->json(['success' => false, 'error' => 'Failed to send OTP.']);
        }
    }

    // Step 2: Verify OTP
    if ($step == 2) {
        $request->validate([
            'otp' => 'required',
        ]);

        $email = session('forget_email');
        $user = Register::where('email', $email)->where('otp', $request->otp)->first();

        if (!$user) {
            return response()->json(['success' => false, 'error' => 'Invalid OTP.']);
        }

        return response()->json(['success' => true, 'message' => 'OTP verified.']);
    }

    // Step 3: Update password
    if ($step == 3) {
        $request->validate([
            'newpassword' => 'required|min:6',
            'confirmpassword' => 'required|same:newpassword',
        ]);

        $email = session('forget_email');
        $user = Register::where('email', $email)->first();

        if (!$user) {
            return response()->json(['success' => false, 'error' => 'Something went wrong.']);
        }

        $user->password = Hash::make($request->newpassword);
        $user->c_password = $user->password;

        $user->otp_status = 't';  
        $user->otp = null;
        $user->save();

        session()->forget('forget_email');

        return response()->json(['success' => true, 'message' => 'Password updated successfully. Redirecting...']);
    }

    return response()->json(['success' => false, 'error' => 'Invalid step.']);
}
public function verifyOtp(Request $request)
{
    $otp = $request->otp;
 
    $sessionEmail = session('emails');
 
        $user = Register::where('email', $sessionEmail)->first();
        if ($user) {
            $user->otp_status = 't';  
            $user->status ='t';
            $user->save();
 
            session()->forget(['emails']);

            return response()->json(['message' => 'OTP verified successfully.', 'success' => true]);
         
         }

    
}


public function everifyOtp(Request $request)
{
    $otp = $request->otp;
 
    $sessionEmail = session('emails');
 
        $user = Student_Enquiry_Managment::where('email', $sessionEmail)->first();

        
        if ($user) {
            $user->otp_status = 't';  
            $user->status ='t';
            $user->save();
 
            session()->forget(['emails']);

            return response()->json(['message' => 'OTP verified successfully.', 'success' => true]);
         
         }

    
}

    public function edit($id)
    {
        $page = Register::findOrFail($id);
        $userId = $page->user_id;
        $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();
        $totalcourse = Teacher_course::where('user_id', $userId)->count();
        $course = Teacher_course::where('user_id', $userId)->get();
        return view('super.user.edit', compact('page','categories', 'totalcourse', 'course'));
    }

    public function teacheredit($id)
    {
        $page = Register::findOrFail($id);
        $userId = $page->user_id;
        $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();
        $totalcourse = Teacher_course::where('user_id', $userId)->count();
        $course = Teacher_course::where('user_id', $userId)->get();
        return view('super.user.edit', compact('page','categories', 'totalcourse', 'course'));
       
    }

public function teacherupdate(Request $request, $id)
{
    $page = Register::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:register,email,' . $id,
        'phone' => 'required|numeric|unique:register,phone,' . $id,
        'dob' => 'nullable|date',
        'address' => 'nullable|string',
        'status' => 'required|in:t,f',
        'user_type' => 'nullable|string|in:Individual,Institute',
        'pincode' => 'nullable|string|max:10',
        'state' => 'nullable|string|max:100',
        'district' => 'nullable|string|max:100',
        'city' => 'nullable|string|max:100',
        'education' => 'nullable|string|max:255',
        'other_education' => 'nullable|string|max:255',
        'experience' => 'nullable|string|max:255',
        'document_type' => 'nullable|string',
        'document_number' => 'nullable|string',
        'avatar' => 'nullable|image|max:2048',
        'degree' => 'nullable|image|max:2048',
        'frount_image' => 'nullable|image|max:2048',
        'back_image' => 'nullable|image|max:2048',
    ]);

    $data = $request->except([
        'avatar', 'degree', 'frount_image', 'back_image',
        'cat_id', 'pid', 'cid', 'sub_id', 'teacher_course_id'
    ]);

    $data['password'] = $page->password;
    $data['c_password'] = $page->c_password;
    $data['user_id'] = $page->user_id;
    $data['date'] = now();

    // Upload Handling
    $fileFields = [
        'avatar' => 'avatar',
        'degree' => 'degree',
        'frount_image' => 'frount_image',
        'back_image' => 'back_image'
    ];

    foreach ($fileFields as $input => $dbField) {
        if ($request->hasFile($input)) {
            if ($page->$dbField && file_exists(public_path('storage/user/' . $page->$dbField))) {
                unlink(public_path('storage/user/' . $page->$dbField));
            }
            $file = $request->file($input);
            $fileName = $dbField . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/user'), $fileName);
            $data[$dbField] = $fileName;
        }
    }

    $page->update($data);

    // Handle Course Updating
   $cat_ids = $request->input('cat_id', []);



$pids = $request->input('pid', []);
$cids = $request->input('cid', []);
$sub_ids = $request->input('sub_id', []);
$teacher_id = $request->input('user_id');
$teacher_course_ids = $request->input('teacher_course_id', []);

    for ($i = 0; $i < count($cat_ids); $i++) {
        $dataa = [
            'user_id' => $page->user_id,
            'cat_id' => $cat_ids[$i],
            'pid' => $pids[$i],
            'cid' => $cids[$i],
            'sub_id' => (is_array($sub_ids[$i] ?? null)) ? implode(',', $sub_ids[$i]) : ($sub_ids[$i] ?? null),
        ];
            
        // If teacher_course_id exists, update. Otherwise, insert.
        if (!empty($teacher_course_ids[$i])) {
            Teacher_course::where('id', $teacher_course_ids[$i])
                ->update($dataa);
        } else {

            Teacher_course::create($dataa);
              
        }
    }

    

    return redirect()->route('super.teacher.index')->with('success', 'User profile updated successfully.');
}

    public function update(Request $request, $id)
{
     $page = Register::findOrFail($id);
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:register,email,' . $page->id,
        'phone' => 'required|numeric|unique:register,phone,' . $page->id,
        
        'address' => 'nullable|string',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:t,f',
    ]);

    $data = $request->all();

      $data['password'] = $page->password;

      $data['user_id'] = $page->user_id;

      $data['c_password'] = $page->c_password;

    $data['date'] = date('Y-m-d, h:i:s a');


    if ($request->hasFile('avatar')) {
      

 $filePath = public_path('storage/user/' . $page->avatar);
    
     
    if (file_exists($filePath)) {
        
        unlink($filePath);
    }
         

         $file = $request->file('avatar');
    
 
    $fileName = time() . '-' . $file->getClientOriginalName();
    
   
    $destinationPath = public_path('storage/user');
    
 
    $file->move($destinationPath, $fileName);
    
 
    $data['avatar'] = $fileName;
    }
   
    $page->update($data);

    return redirect()->route('super.user.index')->with('success', 'User profile updated successfully.');
}

//   public function teacherupdate(Request $request, $id)
// {
//      $page = Register::findOrFail($id);
//     $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email|unique:register,email,' . $page->id,
//         'phone' => 'required|numeric|unique:register,phone,' . $page->id,
        
//         'address' => 'nullable|string',
//         'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//         'status' => 'required|in:t,f',
//     ]);

//     $data = $request->all();

//       $data['password'] = $page->password;

//       $data['user_id'] = $page->user_id;

//       $data['c_password'] = $page->c_password;

//     $data['date'] = date('Y-m-d, h:i:s a');


//     if ($request->hasFile('avatar')) {
      

//  $filePath = public_path('storage/user/' . $page->avatar);
    
     
//     if (file_exists($filePath)) {
        
//         unlink($filePath);
//     }
         

//          $file = $request->file('avatar');
    
 
//     $fileName = time() . '-' . $file->getClientOriginalName();
    
   
//     $destinationPath = public_path('storage/user');
    
 
//     $file->move($destinationPath, $fileName);
    
 
//     $data['avatar'] = $fileName;
//     }
   
//     $page->update($data);

//     return redirect()->route('super.user.index')->with('success', 'Teacher profile updated successfully.');
// }

 public function destroy($id)
    {
        $page = Register::findOrFail($id);
         if ($page->avatar) {
           $filePath = public_path('storage/user/' . $page->avatar);
           
           if (file_exists($filePath)) {
       
        unlink($filePath);
         }
        }
        $page->delete();

        return redirect()->route('super.user.index')->with('success', 'User Delete successfully.');
    }
     public function teacherdestroy($id)
    {
        $page = Register::findOrFail($id);
         if ($page->avatar) {
           $filePath = public_path('storage/user/' . $page->avatar);
           
           if (file_exists($filePath)) {
       
        unlink($filePath);
         }
        }
        $page->delete();

        return redirect()->route('super.teacher.index')->with('success', 'Teacher Delete successfully.');
    }

      public function dashboard()
    {

        if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');
        
    }
        $metatitle = '';
          $metakey = '';
          $metadesc = '';
       // $user = Register::where('user_id', session()->get('userid'))->first();
        $totalorder = Order::where('user_id', session()->get('userid'))->count();
        $completeorder = Order::where('user_id', session()->get('userid'))->where('order_status', 't')->count();
        return view('user.dashboard', compact('totalorder','completeorder','metatitle','metakey','metadesc'));
    }

     public function teacherdashboard()
    {

        if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');
        
    }
        $metatitle = '';
          $metakey = '';
          $metadesc = '';
       // $user = Register::where('user_id', session()->get('userid'))->first();
        $totalorder = Order::where('user_id', session()->get('userid'))->count();
        $completeorder = Order::where('user_id', session()->get('userid'))->where('order_status', 't')->count();
        return view('teacher.dashboard', compact('totalorder','completeorder','metatitle','metakey','metadesc'));
    }

    // Method for the user profile
    public function profile()
    {

        if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');   
        }
         $metatitle = '';
          $metakey = '';
          $metadesc = '';
     
        
        return view('user.profile', compact('metatitle','metakey','metadesc'));
    }

     public function teacherprofile()
    {

        if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');   
        }
        $userId = session('userid');

        $totalcourse = Teacher_course::where('user_id', $userId)->count();
        $course = Teacher_course::where('user_id', $userId)->get();
         $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();
         $metatitle = '';
          $metakey = '';
          $metadesc = '';
     
        
        return view('teacher.profile', compact('metatitle','metakey','metadesc', 'categories','totalcourse', 'course'));
    }

    public function teacherpassword()
    {

        if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');   
        }
        $userId = session('userid');

        
         $metatitle = '';
          $metakey = '';
          $metadesc = '';
     
        
        return view('teacher.change-password', compact('metatitle','metakey','metadesc'));
    }

    public function userpassword()
    {

        if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');   
        }
        $userId = session('userid');

        
         $metatitle = '';
          $metakey = '';
          $metadesc = '';
     
        
        return view('user.change-password', compact('metatitle','metakey','metadesc'));
    }

     public function teacherenquiry()
    {

        if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');   
        }
        $userId = session('userid');

            $students =Student_Enquiry_Managment::all();
            $student =Student_Enquiry_Managment::all();
        
         $metatitle = '';
          $metakey = '';
          $metadesc = '';
     
        
        return view('teacher.enquiry', compact('metatitle','metakey','metadesc','students', 'student'));
    }

        public function profileupdate(Request $request)
{
      $id = $request->id;
    $page = Register::findOrFail($id);

    $formType = $request->input('form_type');

    $rules = [];

    if ($formType === 'personal') {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:register,email,' . $page->id,
            'phone' => 'required|numeric|unique:register,phone,' . $page->id,
            'dob' => 'nullable|date',
            'gender' => 'nullable|in:male,female,other',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    } elseif ($formType === 'address') {
        $rules = [
            'city' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'pincode' => 'nullable|numeric',
            'address' => 'nullable|string',
        ];
    }

    elseif ($formType === 'profile_image')
    {
      $rules = [
      'avatar' => 'nullable|image|max:2048',
      ];  
    }
     elseif ($formType === 'qualification_form')
    {
      $rules = [
        'education' => 'nullable',
        'other_education' => 'nullable',
        'experience' => 'nullable',
      'degree' => 'nullable',
      ];  
    }
    elseif ($formType === 'document_formss')
    {
        $rules = [
      'document_type' => 'required|string|max:255',
      'document_number' => 'required|unique:register,document_number,' . $page->id,
      'frount_image' => 'nullable|image|max:2048',
      'back_image' => 'nullable|image|max:2048',
      ]; 
    }
     

    $validatedData = $request->validate($rules);

    // Handle avatar file upload
    if ($formType === 'qualification_form' && $request->hasFile('degree')) {
        $filePath = public_path('storage/user/' . $page->degree);

        if (is_file($filePath) && file_exists($filePath)) {
            unlink($filePath);
        }

        $file = $request->file('degree');
        $fileNames = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('storage/user'), $fileNames);

        // Add avatar to validated data
        $validatedData['degree'] = $fileNames;
    }

    if ($formType === 'document_formss' && $request->hasFile('frount_image')) {
        $filePath = public_path('storage/user/' . $page->frount_image);

        if (is_file($filePath) && file_exists($filePath)) {
            unlink($filePath);
        }

        $file = $request->file('frount_image');
        $fileNames = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('storage/user'), $fileNames);

        // Add avatar to validated data
        $validatedData['frount_image'] = $fileNames;
    }

     if ($formType === 'document_formss' && $request->hasFile('back_image')) {
        $filePath = public_path('storage/user/' . $page->back_image);

        if (is_file($filePath) && file_exists($filePath)) {
            unlink($filePath);
        }

        $file = $request->file('back_image');
        $fileNames = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('storage/user'), $fileNames);

        // Add avatar to validated data
        $validatedData['back_image'] = $fileNames;
    }

     if ($formType === 'profile_image' && $request->hasFile('avatar')) {
        $filePath = public_path('storage/user/' . $page->avatar);

        if (is_file($filePath) && file_exists($filePath)) {
            unlink($filePath);
        }

        $file = $request->file('avatar');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('storage/user'), $fileName);

        // Add avatar to validated data
        $validatedData['avatar'] = $fileName;
    }

    

    $page->update($validatedData);


    return redirect()->route('user.profile')->with('success', 'User profile updated successfully.');
}



public function teacherpasswordupdate(Request $request)
{
    $id = $request->id;
    $teacher = Register::findOrFail($id);

    $validatedData = $request->validate([
        'newpassword' => 'required|string',
        'cpassword' => 'required|string|same:newpassword',
    ]);

    $teacher->password = Hash::make($request->newpassword);
    $teacher->save();

    // Flash success message BEFORE logout/session forget
    session()->flash('success', 'Password updated successfully. Please log in again.');

    // Clear user session (or use Auth::logout() if logged in via Auth)
    $request->session()->forget('userid');
    $request->session()->forget('email');
    $request->session()->forget('join_as');

    // Redirect to login or change-password page
    return redirect()->route('login');
}


public function teacherprofileupdate(Request $request)
{
    $id = $request->id;
    $page = Register::findOrFail($id);

    $formType = $request->input('form_type');

    $rules = [];

    if ($formType === 'personal') {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:register,email,' . $page->id,
            'phone' => 'required|numeric|unique:register,phone,' . $page->id,
            'dob' => 'nullable|date',
            'profile' => 'nullable',
            'profile_desc' => 'nullable',
            'class_type' =>'required',
            'gender' => 'nullable|in:male,female,other',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    } elseif ($formType === 'address') {
        $rules = [
            'city' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'pincode' => 'nullable|numeric',
            'address' => 'nullable|string',
        ];
    }

    elseif ($formType === 'profile_image')
    {
      $rules = [
      'avatar' => 'nullable|image|max:2048',
      ];  
    }
     elseif ($formType === 'qualification_form')
    {
      $rules = [
        'education' => 'nullable',
        'other_education' => 'nullable',
        'experience' => 'nullable',
      'degree' => 'nullable',
      ];  
    }
    elseif ($formType === 'document_formss')
    {
        $rules = [
      'document_type' => 'required|string|max:255',
      'document_number' => 'required|unique:register,document_number,' . $page->id,
      'frount_image' => 'nullable|image|max:2048',
      'back_image' => 'nullable|image|max:2048',
      ]; 
    }
     

    $validatedData = $request->validate($rules);

    


    // Handle avatar file upload
    if ($formType === 'qualification_form' && $request->hasFile('degree')) {
        $filePath = public_path('storage/user/' . $page->degree);

        if (is_file($filePath) && file_exists($filePath)) {
            unlink($filePath);
        }

        $file = $request->file('degree');
        $fileNames = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('storage/user'), $fileNames);

        // Add avatar to validated data
        $validatedData['degree'] = $fileNames;
    }

    if ($formType === 'document_formss' && $request->hasFile('frount_image')) {
        $filePath = public_path('storage/user/' . $page->frount_image);

        if (is_file($filePath) && file_exists($filePath)) {
            unlink($filePath);
        }

        $file = $request->file('frount_image');
        $fileNames = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('storage/user'), $fileNames);

        // Add avatar to validated data
        $validatedData['frount_image'] = $fileNames;
    }

     if ($formType === 'document_formss' && $request->hasFile('back_image')) {
        $filePath = public_path('storage/user/' . $page->back_image);

        if (is_file($filePath) && file_exists($filePath)) {
            unlink($filePath);
        }

        $file = $request->file('back_image');
        $fileNames = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('storage/user'), $fileNames);

        // Add avatar to validated data
        $validatedData['back_image'] = $fileNames;
    }

     if ($formType === 'profile_image' && $request->hasFile('avatar')) {
        $filePath = public_path('storage/user/' . $page->avatar);

        if (is_file($filePath) && file_exists($filePath)) {
            unlink($filePath);
        }

        $file = $request->file('avatar');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('storage/user'), $fileName);

        // Add avatar to validated data
        $validatedData['avatar'] = $fileName;
    }

    if($formType === 'couse_form')
    {
    $cat_ids = $request->input('cat_id', []);
$pids = $request->input('pid', []);
$cids = $request->input('cid', []);
$sub_ids = $request->input('sub_id', []);
$teacher_id = $request->input('user_id');
$teacher_course_ids = $request->input('teacher_course_id', []);

    for ($i = 0; $i < count($cat_ids); $i++) {
        $data = [
            'user_id' => $teacher_id,
            'cat_id' => $cat_ids[$i],
            'pid' => $pids[$i],
            'cid' => $cids[$i],
            'sub_id' => (is_array($sub_ids[$i] ?? null)) ? implode(',', $sub_ids[$i]) : ($sub_ids[$i] ?? null),
        ];

        // If teacher_course_id exists, update. Otherwise, insert.
        if (!empty($teacher_course_ids[$i])) {
            Teacher_course::where('id', $teacher_course_ids[$i])
                ->update($data);
        } else {
            Teacher_course::create($data);
        }
    }
}

    $page->update($validatedData);

    return redirect()->route('teacher.profile')->with('success', 'User profile updated successfully.');
}

public function logout(Request $request)
    {
        // Clear specific session keys
        $request->session()->forget('userid');
        $request->session()->forget('email');
        $request->session()->forget('join_as');


        // Optionally, you can also clear the entire session
        // $request->session()->flush();

        // Redirect to the home page or login page
        return redirect('/')->with('status', 'You have been logged out successfully.');
    }


public function addToWish(Request $request)
{
    if (!session()->has('userid')) {
        session(['currLoc' => $request->input('currLoc')]);
 
        return redirect()->route('login')->with('success', 'Please Login First.');   
        
    }

    $productId = $request->input('id');
    $userId = session('userid');

    // Check if product already exists in wishlist
    $existingWish = Wish::where('product_id', $productId)->where('user_id', $userId)->first();
    if ($existingWish) {
        return response()->json(['success' => true, 'message' => 'Product already in your wishlist!']);
    }

    $wishlist = new Wish();
    $wishlist->product_id = $productId;
    $wishlist->user_id = $userId;
    $wishlist->date = now();
    $wishlist->qty = 1;

    if ($wishlist->save()) {
        return response()->json(['success' => true, 'message' => 'Product added to your wishlist!']);
    } else {
        return response()->json(['success' => false, 'message' => 'Failed to add product to wishlist. Please try again.']);
    }
}

public function addToCart(Request $request)
{
    if (!session()->has('userid')) {
        session(['currLoc' => $request->input('currLoc')]);
 
        return redirect()->route('login')->with('success', 'Please Login First.');   
        
    }

    $productId = $request->input('id');
    $qty = $request->input('qty');
    $userId = session('userid');
 
    $existingCart = Cart::where('product_id', $productId)->where('user_id', $userId)->first();
    if ($existingCart) {
         
        $existingCart->qty += $qty;
        $existingCart->save();

        return response()->json(['success' => true, 'message' => 'Product quantity updated in your cart!']);
    } else {
        // If the product is not in the cart, add it as a new entry
        $cart = new Cart();
        $cart->product_id = $productId;
        $cart->user_id = $userId;
        $cart->date = now();
        $cart->qty = $qty;

        if ($cart->save()) {
            // Remove from wishlist if it exists
            $wish = Wish::where('product_id', $productId)->where('user_id', $userId)->first();
            if ($wish) {
                $wish->delete();
            }

            return response()->json(['success' => true, 'message' => 'Product added to your cart!']);
        } else {
            return response()->json(['success' => false, 'message' => 'Failed to add product to cart. Please try again.']);
        }
    }
}

public function userwishlist(){
   
       

        if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');   
        
    }
    else
    {
        $metatitle = '';
          $metakey = '';
          $metadesc = '';
       $wishlist = Wish::where('user_id', session()->get('userid'))->get();

       $totalwish = Wish::where('user_id', session()->get('userid'))->count();
      

       $user = Register::where('user_id', session()->get('userid'))->first();
        return view('user.wishlist', compact('wishlist', 'totalwish','user','metatitle','metakey','metadesc'));
    }

}

public function usercartlist(){
   
     
       if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');   
       
    }
    else
    {
        $metatitle = '';
          $metakey = '';
          $metadesc = '';
       $cartlist = Cart::where('user_id', session()->get('userid'))->get();
       $totalcart = Cart::where('user_id', session()->get('userid'))->count();
        return view('user.cartlist', compact('cartlist','totalcart','metatitle','metakey','metadesc'));
    }

}

public function usercheckout(){
  
     
       if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');   
      
    }
    else
    {
        $metatitle = '';
          $metakey = '';
          $metadesc = '';
       $cartlist = Cart::where('user_id', session()->get('userid'))->get();
       $totalcart = Cart::where('user_id', session()->get('userid'))->count();
        return view('user.checkout', compact('cartlist','totalcart','metatitle','metakey','metadesc'));
    }

}

 public function teachercoursedestroy($id)
    {
        // $page = Teacher_course::findOrFail($id);
          
        // $page->delete();

        // return redirect()->back()->with('success', 'Course delete successfully.');
         $page = Teacher_course::find($id);

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
private function asString($value): string
{
    if ($value === null) return '';

    if (is_bool($value)) return $value ? '1' : '0';

    if (is_array($value)) {
        return trim(implode(' ', array_map(function ($x) {
            if (is_scalar($x) || $x === null) return (string)$x;
            return json_encode($x, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }, $value)));
    }

    if (is_object($value)) {
        if (method_exists($value, 'toString')) return (string)$value->toString();
        return (string)json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    return trim((string)$value);
}

private function limit(string $text, int $max = 250): string
{
    $text = trim($text);
    return mb_strlen($text) > $max ? mb_substr($text, 0, $max) : $text;
}


}
