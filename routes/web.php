<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SeminarController;
use App\Http\Controllers\Admin\CaseStudy;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Artisan;

Route::get('clear-cache', function() {
    Artisan::call('optimize:clear');
    return nl2br(Artisan::output());
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');

    Route::get('study', 'studyInAustralia')->name('study.index');
    Route::get('work-skilled-migration', 'workSkilledMigration')->name('work-skilled-migration.index');
    Route::get('family-visas', 'familyVisas')->name('family-visas.index');
    Route::get('visitor-short-stay', 'visitorShortStay')->name('visitor-short-stay.index');
    Route::get('protection-appeals-humanitarian', 'protectionAppealsHumanitarian')->name('protection-appeals-humanitarian.index');

    Route::get('visa-guides', 'visaGuide')->name('visa-guide');

    Route::get('book-appointment', 'bookAppointment')->name('book-appointment');
    Route::get('contact/book-appointment', 'bookAppointment')->name('contact.book-appointment');
    Route::get('contact-us', 'contactUs')->name('contact-us');
    Route::get('about-us', 'aboutUs')->name('about-us');
    Route::get('ankur-saini-founder-visawizer', 'founderAnkurSaini')->name('founder.ankur');

    Route::get('blogs', 'blogs')->name('blogs.index');
    Route::get('blog/{slug}', 'blogSingle')->name('blogs.show');
    Route::get('blog/category/{slug}', 'blogsByCategory')->name('blogs.category');
});

Route::redirect('about', 'about-us')->name('about.redirect');
Route::redirect('contact', 'contact-us')->name('contact.redirect');
Route::redirect('contact/confidential-advice', 'contact-us')->name('contact.confidential-advice');
Route::redirect('contact/speak-to-expert', 'contact-us')->name('contact.speak-to-expert');
Route::redirect('resources/blogs', 'blogs')->name('resources.blogs.redirect');
Route::redirect('resources/webinars', 'webinars')->name('resources.webinars.redirect');
Route::redirect('resources/podcast', 'podcast')->name('resources.podcast.redirect');

Route::get('seminars', [HomeController::class, 'seminars']);
Route::get('webinars', [HomeController::class, 'webinars'])->name('webinars');
Route::get('event-details/{slug}', [HomeController::class, 'eventSingle']);
Route::get('courses', [HomeController::class, 'courses']);
Route::get('course/{slug}', [HomeController::class, 'singleCourse']);
Route::get('course-checkout/{slug}', [CoursesController::class, 'checkout']);
Route::post('checkout/order', [CoursesController::class, 'placeOrder']);
Route::post('checkout/verify', [CoursesController::class, 'verifyPayment']);

Route::get('case-studies', [HomeController::class, 'caseStudies'])->name('case-studies');
Route::get('podcast', [HomeController::class, 'podcasts'])->name('podcast');
Route::get('white-papers', [HomeController::class, 'whitePapers']);
Route::get('glossary', [HomeController::class, 'glossary']);
Route::get('current-events', [HomeController::class, 'globalEvents']);
Route::get('centre-for-business-society', [HomeController::class, 'centreForBusinessSociety']);
Route::get('coaching-mentoring-personality-development', [HomeController::class, 'cmpd']);

Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('videos', [HomeController::class, 'videos'])->name('videos');
Route::get('code-of-conduct', [HomeController::class, 'codeOfConduct'])->name('code-of-conduct');
Route::get('return-and-refund', [HomeController::class, 'returnRefund']);
Route::get('terms-and-conditions', [HomeController::class, 'termsConditions']);


Route::get('comingSoon', [HomeController::class, 'comingSoon']);

Route::get('login', [AuthController::class, 'loginPage']);
Route::post('signup', [AuthController::class, 'signup']);
Route::post('signin', [AuthController::class, 'login']);
Route::post('forget-password', [AuthController::class, 'forgetPassword']);
Route::get('logout', [AuthController::class,'logout']);


Route::post('contact-form', [FormController::class,'submitContact']);
Route::post('newsletter-form', [FormController::class,'submitNewsletter']);
Route::post('event-form', [FormController::class,'submitEvent']);
Route::get('thank-you', function () { return view('thankYou'); });
Route::get('order-thank-you', function () { return view('thankYouOrder'); });
Route::get('thank-you-subscribe', function () { return view('thankYouNews'); });
Route::get('thank-you-for-registration', function () { return view('thankYouEvent'); });

Route::middleware(['auth'])->prefix('my-account')->name('my-account.')->group(function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('orders', [UserController::class, 'orders'])->name('orders');
    Route::get('view-order-invoice/{id}', [UserController::class, 'invoice']);
    Route::get('edit-profile', [UserController::class, 'editProfile'])->name('edit-profile');
    Route::post('update-profile', [UserController::class, 'updateProfile']);
});
Route::post('send-mail', [CoursesController::class, 'sendMail']);


/*Admin route*/
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
  Route::get('dashboard', [AdminController::class, 'index']);
  Route::get('dashboard/settings', [AdminController::class, 'settings']);
  Route::post('store-settings', [AdminController::class, 'saveSettings']);

  Route::get('dashboard/banners', [AdminController::class, 'banners']);
  Route::get('edit-banner/{id}', [AdminController::class, 'editBanner']);
  Route::post('store-banner', [AdminController::class, 'saveBanner']);
  Route::post('update-banner', [AdminController::class, 'updateBanner']);
  Route::get('delete-banner/{id}', [AdminController::class, 'deleteBanner']);

  Route::get('dashboard/testimonials', [AdminController::class, 'testimonials']);
  Route::get('edit-testimonial/{id}', [AdminController::class, 'editTestimonial']);
  Route::post('store-testimonial', [AdminController::class, 'saveTestimonial']);
  Route::post('update-testimonial', [AdminController::class, 'updateTestimonial']);
  Route::get('delete-testimonial/{id}', [AdminController::class, 'deleteTestimonial']);

  Route::get('dashboard/white-papers', [AdminController::class, 'whitePapers']);
  Route::get('edit-white-papers/{id}', [AdminController::class, 'editWhitePapers']);
  Route::post('store-white-papers', [AdminController::class, 'saveWhitePapers']);
  Route::post('update-white-papers', [AdminController::class, 'updateWhitePapers']);
  Route::get('delete-white-papers/{id}', [AdminController::class, 'deleteWhitePapers']);

  Route::get('seminars', [SeminarController::class, 'index']);
  Route::get('edit-seminar/{id}', [SeminarController::class, 'edit']);
  Route::post('store-seminar', [SeminarController::class, 'store']);
  Route::post('update-seminar', [SeminarController::class, 'update']);
  Route::get('delete-seminar/{id}', [SeminarController::class, 'delete']);
  Route::get('view-enquiries/{id}', [SeminarController::class, 'viewEnquiries']);
  Route::get('event-enquiries', [SeminarController::class, 'eventEnquiries']);
  Route::get('delete-event-enquiry/{id}', [SeminarController::class, 'deleteEventEnquiry']);

  Route::get('case-study', [CaseStudy::class, 'index']);
  Route::get('edit-case-study/{id}', [CaseStudy::class, 'edit']);
  Route::post('store-case-study', [CaseStudy::class, 'store']);
  Route::post('update-case-study', [CaseStudy::class, 'update']);
  Route::get('delete-case-study/{id}', [CaseStudy::class, 'delete']);

  Route::get('enquiries', [AdminController::class, 'enquiries']);
  Route::get('delete-enquiry/{id}', [AdminController::class, 'deleteEnquiry']);
}); 

Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/login', function () {
  if(Auth::check()){
    return redirect('admin/dashboard');
  }else{
    return view('admin.auth.login');
  }
});

Route::post('login',[LoginController::class,'adminLogin'])->name('admin-login');
Route::get('admin/logout', [LoginController::class,'logout']);

Route::get("sitemap.xml" , function () {
return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
 });

Route::get('visa/{slug}', [HomeController::class, 'showVisaTopic'])->name('visa.topic');
Route::get('{slug}', [HomeController::class, 'showHeaderTopic'])->name('header.topic');

