<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SeminarController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'index']);
Route::get('study', [HomeController::class, 'studyInAustralia']);
Route::get('contact-us', [HomeController::class, 'contactUs']);
Route::get('about-us', [HomeController::class, 'aboutus']);
Route::get('blogs', [HomeController::class, 'blogs']);
Route::get('blog/{slug}', [HomeController::class, 'blogSingle']);
Route::get('blog/category/{slug}', [HomeController::class, 'blogsByCategory']);

Route::get('services', [HomeController::class, 'services']);
Route::get('service/advisory-consulting', [HomeController::class, 'advisoryConsulting']);
Route::get('service/training-workshops', [HomeController::class, 'trainingWorkshops']);
Route::get('service/certification-programs', [HomeController::class, 'certificationPrograms']);
Route::get('service/measure-maintain', [HomeController::class, 'measureMaintain']);
Route::get('service/centres-accreditation', [HomeController::class, 'centresAccreditation']);
Route::get('service/coaching-mentoring', [HomeController::class, 'coachingMentoring']);

Route::get('featured-and-trending', [HomeController::class, 'featuredTrending']);
Route::get('who-we-are', [HomeController::class, 'whoWeAre']);
Route::get('what-we-do', [HomeController::class, 'whatWeDo']);
Route::get('mission-vision', [HomeController::class, 'missionVision']);
Route::get('advisory-board', [HomeController::class, 'advisoryBoard']);
Route::get('facilitators', [HomeController::class, 'facilitators']);
Route::get('collaborations', [HomeController::class, 'collaborations']);
Route::get('business-society', [HomeController::class, 'businessSociety']);
Route::get('individual-business-ethics', [HomeController::class, 'individualBusinessEthics']);
Route::get('ethical-leadership', [HomeController::class, 'ethicalLeadership']);
Route::get('ethical-culture', [HomeController::class, 'ethicalCulture']);
Route::get('corporate-social-responsibility', [HomeController::class, 'corporateSocialResponsibility']);
Route::get('ethical-theories', [HomeController::class, 'ethicalTheories']);
Route::get('stakeholder-management', [HomeController::class, 'stakeholderManagement']);
Route::get('sustainability-esg', [HomeController::class, 'sustainabilityEsg']);
Route::get('giving-voice-to-values', [HomeController::class, 'givingVoiceToValues']);

Route::get('seminars', [HomeController::class, 'seminars']);
Route::get('webinars', [HomeController::class, 'webinars']);
Route::get('event-details/{slug}', [HomeController::class, 'eventSingle']);
Route::get('courses', [HomeController::class, 'courses']);
Route::get('course/{slug}', [HomeController::class, 'singleCourse']);
Route::get('course-checkout/{slug}', [CoursesController::class, 'checkout']);
Route::post('checkout/order', [CoursesController::class, 'placeOrder']);
Route::post('checkout/verify', [CoursesController::class, 'verifyPayment']);

Route::get('finance', [HomeController::class, 'finance']);
Route::get('media-journalism', [HomeController::class, 'mediaJournalism']);
Route::get('research-publications', [HomeController::class, 'researchPublications']);
Route::get('workplace-business', [HomeController::class, 'workplaceBusiness']);
Route::get('ai-technology', [HomeController::class, 'aiTechnology']);
Route::get('environment', [HomeController::class, 'environment']);
Route::get('marketing-sales', [HomeController::class, 'marketingSales']);
Route::get('corporate-governance', [HomeController::class, 'corporateGovernance']);
Route::get('supply-chain', [HomeController::class, 'supplyChain']);
Route::get('diagnostic-quiz', [HomeController::class, 'quiz']);
Route::get('quiz/{slug}', [HomeController::class, 'singleQuiz']);
Route::get('ethics4Work-framework', [HomeController::class, 'framework']);

Route::get('case-studies', [HomeController::class, 'caseStudies']);
Route::get('podcasts-practitioner-interviews', [HomeController::class, 'ppi']);
Route::get('recommended-books', [HomeController::class, 'recommendedBooks']);
Route::get('tools-frameworks', [HomeController::class, 'toolsFrameworks']);
Route::get('reports-newsletters', [HomeController::class, 'reportsNewsletters']);
Route::get('glossary', [HomeController::class, 'glossary']);
Route::get('current-events', [HomeController::class, 'globalEvents']);
Route::get('centre-for-business-society', [HomeController::class, 'centreForBusinessSociety']);
Route::get('coaching-mentoring-personality-development', [HomeController::class, 'cmpd']);

Route::get('privacy-policy', [HomeController::class, 'privacyPolicy']);
Route::get('faq', [HomeController::class, 'faq']);
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

  Route::get('dashboard/facilitators', [AdminController::class, 'facilitators']);
  Route::get('edit-facilitator/{id}', [AdminController::class, 'editFacilitator']);
  Route::post('store-facilitator', [AdminController::class, 'saveFacilitator']);
  Route::post('update-facilitator', [AdminController::class, 'updateFacilitator']);
  Route::get('delete-facilitator/{id}', [AdminController::class, 'deleteFacilitator']);

  Route::get('seminars', [SeminarController::class, 'index']);
  Route::get('edit-seminar/{id}', [SeminarController::class, 'edit']);
  Route::post('store-seminar', [SeminarController::class, 'store']);
  Route::post('update-seminar', [SeminarController::class, 'update']);
  Route::get('delete-seminar/{id}', [SeminarController::class, 'delete']);
  Route::get('view-enquiries/{id}', [SeminarController::class, 'viewEnquiries']);
  Route::get('event-enquiries', [SeminarController::class, 'eventEnquiries']);
  Route::get('delete-event-enquiry/{id}', [SeminarController::class, 'deleteEventEnquiry']);

  Route::get('courses', [CourseController::class, 'index']);
  Route::get('edit-course/{id}', [CourseController::class, 'edit']);
  Route::post('store-course', [CourseController::class, 'store']);
  Route::post('update-course', [CourseController::class, 'update']);
  Route::get('delete-course/{id}', [CourseController::class, 'delete']);
  Route::get('view-course-enquiries/{name}', [CourseController::class, 'viewEnquiries']);

  Route::get('enquiries', [AdminController::class, 'enquiries']);
  Route::get('delete-enquiry/{id}', [AdminController::class, 'deleteEnquiry']);

  Route::get('orders', [CourseController::class, 'orders']);
  Route::get('view-order/{id}', [CourseController::class, 'viewOrder']);
  Route::get('invoices', [CourseController::class, 'invoices']);
  Route::get('view-invoice/{id}', [CourseController::class, 'viewInvoice']);
  Route::get('payments', [CourseController::class, 'payments']);
  Route::get('users', [CustomerController::class, 'index']);

  Route::get('quiz-category', [QuizController::class, 'index']);
  Route::get('edit-category/{id}', [QuizController::class, 'edit']);
  Route::post('store-category', [QuizController::class, 'store']);
  Route::post('update-category', [QuizController::class, 'update']);
  Route::get('delete-category/{id}', [QuizController::class, 'delete']);

  Route::get('quiz', [QuizController::class, 'quiz']);
  Route::get('edit-quiz/{id}', [QuizController::class, 'editQuiz']);
  Route::post('store-quiz', [QuizController::class, 'storeQuiz']);
  Route::post('update-quiz', [QuizController::class, 'updateQuiz']);
  Route::get('delete-quiz/{id}', [QuizController::class, 'deleteQuiz']);

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

Route::get('clear-cache', function () {
    Artisan::call('optimize:clear');
    return "All cache cleared!";
});

Route::get('visa/{slug}', [HomeController::class, 'studyVisaTopic']);
Route::get('{slug}', [HomeController::class, 'studyTopic']);

