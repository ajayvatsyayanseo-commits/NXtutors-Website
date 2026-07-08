<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneratedPageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentenquiryController;
use App\Http\Controllers\DemoLeadController;
use App\Http\Controllers\SuperAdmin\CategoryController;



use App\Models\GeneratedPage;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/get-pincode-details', function (Request $request) {
    $pincode = $request->input('pincode');

    $response = Http::withHeaders([
         'X-RapidAPI-Key' => 'a9548f489fmshd3d3a7f7eb610bfp1ac0aajsn3b4a158d94cf',
        'X-RapidAPI-Host' => 'indian-new-pincode-api.p.rapidapi.com'
    ])->get('https://indian-new-pincode-api.p.rapidapi.com/api/Indian-Pincode-Details/', [
        'pincode' => $pincode,
    ]);

    return response()->json([
        'data' => $response->json() ?? [],
    ]);
});

Route::get('/home/teachers', [HomeController::class, 'teachers'])->name('home.teachers');
Route::get('/local-tutors', [HomeController::class, 'localTutors'])->name('home.localTutors');
Route::get('/home/blogs', [HomeController::class, 'blogs'])->name('home.blogs');
Route::get('/compare-defaults', [HomeController::class, 'compareDefaults'])->name('home.compareDefaults');
Route::get('/home/compare-ai', [HomeController::class, 'compareAi'])->name('home.compareAi');

Route::post('/demo-lead/store', [DemoLeadController::class, 'store'])->name('demo.lead.store');

Route::get('category/{slug1}/{slug2?}/{slug3?}', [HomeController::class, 'showCategory'])
    ->where([
        'slug1' => '[a-z0-9\-]+',
        'slug2' => '[a-z0-9\-]+',
        'slug3' => '[a-z0-9\-]+',
    ]);

Route::get('course/{slug}', [HomeController::class, 'singlecoursepage'])->name('singlecourse');

Route::get('/page', function (Request $request) {
    $pages = GeneratedPage::where('status', 'published')
        ->latest()
        ->paginate(12);

    if ($request->ajax()) {
        return view('pages.partials.page-cards', compact('pages'))->render();
    }

    $metatitle = '';
    $metakey = '';
    $metadesc = '';

    return view('page', compact('pages', 'metatitle', 'metakey', 'metadesc'));
})->name('page');

Route::get('/p/{slug}', [GeneratedPageController::class, 'show'])->name('pages.show');
Route::get('/p/{slug}/teachers', [GeneratedPageController::class, 'teachers'])->name('genpage.teachers');
Route::get('/p/{slug}/blogs', [GeneratedPageController::class, 'blogs'])->name('genpage.blogs');

Route::get('/blog', [HomeController::class, 'blogIndex'])->name('blog.index');
Route::get('/blog/load', [HomeController::class, 'blogLoad'])->name('blog.load');
Route::get('/blog/{slug}', [HomeController::class, 'showsingleblog'])->name('blog.show');

Route::get('contact', [HomeController::class, 'contactpage'])->name('contact');
Route::get('/demo-class', [HomeController::class, 'democlassIndex'])->name('demo-class.index');
Route::get('/pricing-guide', [HomeController::class, 'pricingguideIndex'])->name('pricing-guide.index');
Route::get('/faqs', [HomeController::class, 'faqsIndex'])->name('faqs.index');
Route::get('/terms-conditions', [HomeController::class, 'termsconditionsIndex'])->name('terms-conditions.index');
Route::get('/privacy-policy', [HomeController::class, 'privacypolicyIndex'])->name('privacy-policy.index');

Route::get('course', [HomeController::class, 'coursepage'])->name('course');

Route::get('/tutors', [HomeController::class, 'tutorsIndex'])->name('tutors.index');
Route::get('/tutors/load', [HomeController::class, 'tutorsLoad'])->name('tutors.load');

Route::get('/city', [HomeController::class, 'cityIndex'])->name('city.index');
Route::get('/city/{slug}', [HomeController::class, 'cityShow'])->name('city.show');
Route::get('/city/{slug}/areas/load', [HomeController::class, 'cityAreasLoad'])->name('city.areas.load');
Route::get('/city/{citySlug}/{areaSlug}', [HomeController::class, 'cityAreaShow'])->name('city.area.show');

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
Route::get('/get-parent-categoriess', [CategoryController::class, 'getParentCategoriess'])->name('getparentCategoriess');
Route::get('/get-products-by-class/{ccatId}', [CategoryController::class, 'getProductsByClassId'])->name('get.products.by.class');