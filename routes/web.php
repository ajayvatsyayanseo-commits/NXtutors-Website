<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\AuthController;

use App\Http\Controllers\SuperAdmin\CategoryController;
use App\Http\Controllers\SuperAdmin\BlogController;
use App\Http\Controllers\SuperAdmin\CityController;
use App\Http\Controllers\SuperAdmin\CityAreaController;

use App\Http\Controllers\SuperAdmin\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\UserManagementController;

use App\Http\Controllers\SuperAdmin\PageGeneratorController;

use App\Http\Controllers\SuperAdmin\SettingController;

use App\Http\Controllers\GeneratedPageController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\SuperAdmin\PagegenImportController;

use App\Http\Controllers\SuperAdmin\BannerController;

use App\Http\Controllers\SuperAdmin\PremiumSchoolController;
use App\Http\Controllers\TutorImportController;

use App\Http\Controllers\StudentenquiryController;

use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\TeacherMiddleware;

use App\Http\Controllers\SuperAdmin\PlanController;

use App\Models\GeneratedPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\PricingController;

use App\Http\Controllers\DemoLeadController;

Route::middleware(['throttle:ip_visit_limit'])->group(function () {
    require __DIR__.'/web_public.php';
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])
    ->name('sitemap');

Route::post('/ask-nxt-ai', [HomeController::class, 'askNxtAi'])
    ->name('ask.nxt.ai');

// Route::post('/get-pincode-details', function (\Illuminate\Http\Request $request) {
//     $pincode = $request->input('pincode');
//     $response = Http::withHeaders([
//         'X-RapidAPI-Key' => 'a9548f489fmshd3d3a7f7eb610bfp1ac0aajsn3b4a158d94cf',
//         'X-RapidAPI-Host' => 'indian-new-pincode-api.p.rapidapi.com'
//     ])->get('https://indian-new-pincode-api.p.rapidapi.com/api/Indian-Pincode-Details/', [
//         'pincode' => $pincode
//     ]);
//     // This API returns a top-level array!
//     return response()->json(['data' => $response->json() ?? []]);
// });

    Route::get('/test-pincode/{pincode}', function ($pincode) {

    $response = Http::get(
        'https://api.postalpincode.in/pincode/'.$pincode
    );

    return response()->json($response->json());

});


Route::post('/get-pincode-details', function (Request $request) {
    $request->validate([
        'pincode' => 'required|digits:6',
    ]);

    $response = Http::timeout(10)
        ->get('https://api.postalpincode.in/pincode/' . $request->pincode);

    if (!$response->successful()) {
        return response()->json([
            'status' => false,
            'message' => 'Pincode API failed',
        ], 500);
    }

    $data = $response->json();

    if (empty($data[0]) || ($data[0]['Status'] ?? '') !== 'Success') {
        return response()->json([
            'status' => false,
            'message' => 'Invalid pincode or no data found.',
            'data' => $data,
        ], 404);
    }

    return response()->json([
        'status' => true,
        'data' => $data[0]['PostOffice'] ?? [],
    ]);
});
Route::get('login', [HomeController::class, 'loginpage'])->name('login');
Route::post('/login', [RegisterController::class, 'userlogin'])->name('login');

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

Route::post('/subscription/pay/{plan}', [PricingController::class, 'pay'])
    ->name('subscription.pay');

Route::post('/subscription/activate-free/{plan}', [PricingController::class, 'activateFree'])
    ->name('subscription.activate.free');

    Route::get('/subscription/payment/success', [PricingController::class, 'paymentSuccess'])
    ->name('subscription.payment.success');

Route::post('/cashfree/webhook', [PricingController::class, 'cashfreeWebhook'])
    ->name('cashfree.webhook');

Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

Route::get('/subscription/buy/{plan}', [PricingController::class, 'buy'])
    ->name('subscription.buy');

Route::get('/subscription/checkout/{plan}', [PricingController::class, 'checkout'])
    ->name('subscription.checkout');
Route::get('forget-password', [HomeController::class, 'forgetpage'])->name('forget-password');
Route::post('/forget', [RegisterController::class, 'userforget'])->name('forget');

    
Route::get('/home/teachers', [HomeController::class, 'teachers'])->name('home.teachers');

Route::get('/local-tutors', [HomeController::class, 'localTutors'])->name('home.localTutors');
Route::get('/home/blogs', [HomeController::class, 'blogs'])->name('home.blogs');

Route::get('/compare-defaults', [HomeController::class, 'compareDefaults'])->name('home.compareDefaults');
Route::post('/demo-lead/store', [DemoLeadController::class, 'store'])->name('demo.lead.store');
// routes/web.php
Route::get('/home/compare-ai', [HomeController::class, 'compareAi'])->name('home.compareAi');

Route::get('category/{slug1}/{slug2?}/{slug3?}', [HomeController::class, 'showCategory'])
    ->where([
        'slug1' => '[a-z0-9\-]+',
        'slug2' => '[a-z0-9\-]+',
        'slug3' => '[a-z0-9\-]+'
    ]);

Route::get('course/{slug}', [HomeController::class, 'singlecoursepage'])->name('singlecourse');




// Route::get('/page', function () {
//     $pages = GeneratedPage::where('status','published')->latest()->get();
//     return view('page', compact('pages'));
// })->name('page');

Route::get('/page', function (Request $request) {
    $pages = GeneratedPage::where('status', 'published')
        ->latest()
        ->paginate(12); // 12 cards per load

    // If AJAX request → return partial HTML
    if ($request->ajax()) {
        return view('pages.partials.page-cards', compact('pages'))->render();
    }
	 $metatitle = '';
            $metakey = '';
            $metadesc = '';
    return view('page', compact('pages','metatitle','metakey','metadesc'));
})->name('page');

// Route::get('/p/{slug}', function ($slug) {
//     $page = GeneratedPage::where('slug',$slug)->where('status','published')->firstOrFail();
//     return view('pages.show', compact('page'));
// })->name('pages.show');

Route::get('/p/{slug}', [GeneratedPageController::class, 'show'])->name('pages.show');
Route::get('/p/{slug}/teachers', [GeneratedPageController::class, 'teachers'])->name('genpage.teachers');

Route::get('/p/{slug}/blogs', [GeneratedPageController::class, 'blogs'])->name('genpage.blogs');
Route::get('/blog', [HomeController::class, 'blogIndex'])->name('blog.index');
Route::get('contact', [HomeController::class, 'contactpage'])->name('contact');

Route::get('/city', [HomeController::class, 'blogIndex'])->name('city.index');
Route::get('/demo-class', [HomeController::class, 'democlassIndex'])->name('demo-class.index');

Route::get('/pricing-guide', [HomeController::class, 'pricingguideIndex'])->name('pricing-guide.index');

Route::get('/faqs', [HomeController::class, 'faqsIndex'])->name('faqs.index');

Route::get('/terms-conditions', [HomeController::class, 'termsconditionsIndex'])->name('terms-conditions.index');

Route::get('/privacy-policy', [HomeController::class, 'privacypolicyIndex'])->name('privacy-policy.index');

Route::get('course', [HomeController::class, 'coursepage'])->name('course');

Route::get('/blog/load', [HomeController::class, 'blogLoad'])->name('blog.load');
Route::get('/blog/{slug}', [HomeController::class, 'showsingleblog'])->name('blog.show');

Route::get('/tutors', [HomeController::class, 'tutorsIndex'])->name('tutors.index');
Route::get('/city', [HomeController::class, 'cityIndex'])->name('city.index');
Route::get('/city/{slug}', [HomeController::class, 'cityShow'])->name('city.show');
Route::get('/city/{slug}/areas/load', [HomeController::class, 'cityAreasLoad'])->name('city.areas.load');
Route::get('/city/{citySlug}/{areaSlug}', [HomeController::class, 'cityAreaShow'])
    ->name('city.area.show');

Route::get('/tutors/load', [HomeController::class, 'tutorsLoad'])->name('tutors.load');

Route::get('/tutor/{user_id}', [HomeController::class, 'showsingletutor'])->name('tutor.show');

Route::get('/tutor/{city}/{user_id}/{name}', [HomeController::class, 'showsingletutornew'])
    ->name('tutor.newshow');

Route::get('/enquiry_teacher', [StudentenquiryController::class, 'teacherenquiry'])->name('enquiry_teacher');

Route::post('/enquiryregister', [StudentenquiryController::class, 'teacherenquiryupdate'])->name('enquiryregister');

Route::post('/enquiry', [HomeController::class, 'storeenquiry'])->name('enquiry');

Route::post('/register', [RegisterController::class, 'userstore'])->name('register');
Route::post('/check-email', [RegisterController::class, 'checkEmail'])->name('checkEmail');
Route::post('/check-phone', [RegisterController::class, 'checkPhone'])->name('checkPhone');
Route::post('/check-otp', [RegisterController::class, 'checkOTP'])->name('checkOTP');
Route::post('/echeck-otp', [RegisterController::class, 'checkOTP'])->name('echeckOTP');
Route::post('/verify-otp', [RegisterController::class, 'verifyOtp'])->name('verifyOtp');

Route::post('/everify-otp', [RegisterController::class, 'everifyOtp'])->name('everifyOtp');

 Route::get('/get-child-categories/{parentId}', [CategoryController::class, 'getChildCategories'])->name('getChildCategories');
        Route::get('/get-parent-categories/{catId}', [CategoryController::class, 'getparentCategories'])->name('getparentCategories');

        // Route::get('/get-products-by-class/{ccatId}', [CategoryController::class, 'getProductsByClassId'])->name('getparentCategories');

          Route::get('/get-parent-categoriess', [CategoryController::class, 'getParentCategoriess'])->name('getparentCategoriess');

Route::get('/get-products-by-class/{ccatId}', [CategoryController::class, 'getProductsByClassId'])->name('get.products.by.class');

 




Route::get('{slug}/teacher/{slug1}/{id}', [HomeController::class, 'singleteacherprofile'])->name('teacherprofile');

Route::middleware([TeacherMiddleware::class])->group(function () {
    Route::prefix('teacher')->name('teacher.')->group(function () {
        Route::get('/dashboard', [RegisterController::class, 'teacherdashboard'])->name('dashboard');

         Route::get('/my-plan', [PricingController::class, 'teacherMyPlan'])->name('my-plan');

        Route::get('/profile', [RegisterController::class, 'teacherprofile'])->name('profile');

         Route::get('/change-password', [RegisterController::class, 'teacherpassword'])->name('change-password');

         Route::get('/enquiry', [RegisterController::class, 'teacherenquiry'])->name('enquiry');

         Route::post('/change-password', [RegisterController::class, 'teacherpasswordupdate'])->name('change-password.update');

         Route::post('/profile', [RegisterController::class, 'teacherprofileupdate'])->name('profile.update');

        Route::get('/wishlist', [RegisterController::class, 'userwishlist'])->name('wishlist');

Route::get('cartlist', [RegisterController::class, 'usercartlist'])->name('cartlist');

Route::get('checkout', [RegisterController::class, 'usercheckout'])->name('checkout');
Route::post('checkout', [OrderController::class, 'orderplace'])->name('checkout');
Route::get('success', [OrderController::class, 'userordersuccess'])->name('success'); 

Route::get('/order', [OrderController::class, 'userorderlist'])->name('order');

Route::get('/order/{id}', [OrderController::class, 'vieworder'])->name('order.view');
    });
Route::post('/cartlist', [OrderController::class, 'updateCart'])->name('cartlist');
});

Route::middleware([UserMiddleware::class])->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/dashboard', [RegisterController::class, 'dashboard'])->name('dashboard');

         Route::get('/my-plan', [PricingController::class, 'studentMyPlan'])->name('my-plan');

        Route::get('/profile', [RegisterController::class, 'profile'])->name('profile');

         Route::post('/profile', [RegisterController::class, 'profileupdate'])->name('profile.update');
             Route::get('/change-password', [RegisterController::class, 'userpassword'])->name('change-password');

          Route::post('/change-password', [RegisterController::class, 'teacherpasswordupdate'])->name('change-password.update');

        Route::get('/wishlist', [RegisterController::class, 'userwishlist'])->name('wishlist');

Route::get('cartlist', [RegisterController::class, 'usercartlist'])->name('cartlist');

Route::get('checkout', [RegisterController::class, 'usercheckout'])->name('checkout');
Route::post('checkout', [OrderController::class, 'orderplace'])->name('checkout');
Route::get('success', [OrderController::class, 'userordersuccess'])->name('success'); 

Route::get('/order', [OrderController::class, 'userorderlist'])->name('order');

Route::get('/order/{id}', [OrderController::class, 'vieworder'])->name('order.view');
    });
Route::post('/cartlist', [OrderController::class, 'updateCart'])->name('cartlist');
});

  Route::get('teacher/{id}', [HomeController::class, 'singleteacherreview'])->name('teacher');

  Route::post('/feedback', [CityController::class, 'teacherfeedback'])->name('feedback');

Route::prefix('super')->name('super.')->group(function () {

    // Super Admin Login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('settings', [SettingController::class, 'show'])->name('settings');

    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');

    // Protected Super Admin Routes
    Route::middleware(['auth', 'role:super_admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Super admin creates all users
        Route::get('/users', [UserManagementController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserManagementController::class, 'create'])->name('users.create');
        Route::post('/users', [UserManagementController::class, 'store'])->name('users.store');
      // super admin page genrate
       Route::get('/page-generator', [PageGeneratorController::class,'create'])->name('pagegen.create');
       Route::post('/page-generator', [PageGeneratorController::class,'store'])->name('pagegen.store');
        Route::get('/generated-pages', [PageGeneratorController::class,'index'])->name('pagegen.index');
         Route::get('/generated-pages/{page}/edit', [PageGeneratorController::class,'edit'])
        ->name('pagegen.edit');


        Route::get('pagegen/import', [PagegenImportController::class, 'create'])
    ->name('pagegen.import.create');

    Route::post('/pagegen/import', [PagegenImportController::class, 'store'])
    ->name('pagegen.import.store');

        Route::put('/generated-pages/{page}', [PageGeneratorController::class,'update'])
        ->name('pagegen.update');
        Route::delete('/generated-pages/{page}', [PageGeneratorController::class,'destroy'])
        ->name('pagegen.destroy');
      // super admin Category
      
        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('category/create', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

        Route::get('category/get-child-categories/{parentId}', [CategoryController::class, 'getChildCategories'])->name('category.getChildCategories');

        Route::get('category/get-parent-categories/{catId}', [CategoryController::class, 'getparentCategories'])->name('category.getparentCategories');

         Route::get('category/get-products-by-class/{ccatId}', [CategoryController::class, 'getProductsByClassId'])->name('category.getparentCategories');

          Route::get('/category/get-parent-categoriess', [CategoryController::class, 'getParentCategoriess'])->name('category.getparentCategoriess');

          // Banner
         Route::get('banner', [BannerController::class, 'index'])->name('banner.index');
        Route::get('banner/create', [BannerController::class, 'create'])->name('banner.create');
        Route::post('banner/create', [BannerController::class, 'store'])->name('banner.store');
        Route::get('banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
        Route::put('banner/edit/{id}', [BannerController::class, 'update'])->name('banner.update');
        Route::delete('banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
      
      // superadmin register student or teacher
      
      Route::get('user', [RegisterController::class, 'index'])->name('user.index');
        Route::get('user/create', [RegisterController::class, 'create'])->name('user.create');
        Route::post('user/create', [RegisterController::class, 'store'])->name('user.store');
        Route::get('user/edit/{id}', [RegisterController::class, 'edit'])->name('user.edit');
        Route::put('user/edit/{id}', [RegisterController::class, 'update'])->name('user.update');
        Route::delete('user/delete/{id}', [RegisterController::class, 'destroy'])->name('user.destroy');
      
      
      Route::get('teacher', [RegisterController::class, 'indexteacher'])->name('teacher.index');
        Route::get('teacher/create', [RegisterController::class, 'teachercreate'])->name('teacher.create');
        Route::post('teacher/create', [RegisterController::class, 'teacherstore'])->name('teacher.store');
        Route::get('teacher/edit/{id}', [RegisterController::class, 'teacheredit'])->name('teacher.edit');
        Route::put('teacher/edit/{id}', [RegisterController::class, 'teacherupdate'])->name('teacher.update');
        Route::delete('teacher/delete/{id}', [RegisterController::class, 'teacherdestroy'])->name('teacher.destroy');
      
      Route::get('teacher/review', [RegisterController::class, 'teacherreviewlist'])->name('teacher.review');
      Route::get('teacher/generate', [RegisterController::class, 'teachergenerate'])->name('teacher.generate');

      Route::post('teacher/generate', [RegisterController::class, 'teacherGenerateStore'])
    ->name('teacher.generate.store');
      
       Route::post('teacher/import-excel', [TutorImportController::class, 'upload'])
    ->name('teacher.import.excel'); 
      
            // superadmin blog
      
       Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
        Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('blog/create', [BlogController::class, 'store'])->name('blog.store');
        Route::get('blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('blog/edit/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

         //City
        Route::get('city', [CityController::class, 'index'])->name('city.index');
        Route::get('city/create', [CityController::class, 'create'])->name('city.create');
        Route::post('city/create', [CityController::class, 'store'])->name('city.store');
        Route::get('city/edit/{id}', [CityController::class, 'edit'])->name('city.edit');
        Route::put('city/edit/{id}', [CityController::class, 'update'])->name('city.update');
        Route::delete('city/delete/{id}', [CityController::class, 'destroy'])->name('city.destroy');

        //Area
        Route::get('cityarea', [CityAreaController::class, 'index'])->name('cityarea.index');
        Route::get('cityarea/create', [CityAreaController::class, 'create'])->name('cityarea.create');

        Route::post('cityarea/create', [CityAreaController::class, 'store'])->name('cityarea.store');

        Route::get('cityarea/edit/{id}', [CityAreaController::class, 'edit'])->name('cityarea.edit');

        Route::put('cityarea/edit/{id}', [CityAreaController::class, 'update'])->name('cityarea.update');

        Route::delete('cityarea/delete/{id}', [CityAreaController::class, 'destroy'])->name('cityarea.destroy');

         // Page
        Route::get('page', [PageController::class, 'index'])->name('page.index');
        Route::get('page/create', [PageController::class, 'create'])->name('page.create');
        Route::post('page/create', [PageController::class, 'store'])->name('page.store');
        Route::get('page/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
        Route::put('page/edit/{id}', [PageController::class, 'update'])->name('page.update');
        Route::delete('page/delete/{id}', [PageController::class, 'destroy'])->name('page.destroy');


        Route::get('premium-schools/import', [PremiumSchoolController::class,'importForm'])->name('premium-schools.importForm');
    Route::post('premium-schools/import', [PremiumSchoolController::class,'import'])->name('premium-schools.import');

    Route::resource('premium-schools', PremiumSchoolController::class);
       Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('plans/create', [PlanController::class, 'store'])->name('plans.store');
Route::get('plans/edit/{id}', [PlanController::class, 'edit'])->name('plans.edit');
Route::put('plans/edit/{id}', [PlanController::class, 'update'])->name('plans.update');
Route::delete('plans/delete/{id}', [PlanController::class, 'destroy'])->name('plans.destroy');

      
      
    });
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
