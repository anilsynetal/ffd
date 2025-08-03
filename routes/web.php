<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubMenuController;

use App\Http\Controllers\Installer\WelcomeController;
use App\Http\Controllers\Installer\RequirementsController;
use App\Http\Controllers\Installer\PermissionsController;
use App\Http\Controllers\Installer\EnvironmentController;
use App\Http\Controllers\Installer\DatabaseController;
use App\Http\Controllers\Installer\FinalController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\NewsLetterController;

Route::group(['prefix' => 'install', 'as' => 'installer.'], function () {
    Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
    Route::get('/requirements', [RequirementsController::class, 'requirements'])->name('requirements');
    Route::get('/permissions', [PermissionsController::class, 'permissions'])->name('permissions');

    // Environment Setup
    Route::get('/environment', [EnvironmentController::class, 'environment'])->name('environment');
    Route::post('/environment/save', [EnvironmentController::class, 'save'])->name('environmentSave');

    // Database Setup
    Route::get('/database', [DatabaseController::class, 'database'])->name('database');

    // Final Step
    Route::get('/verify', [FinalController::class, 'verify'])->name('verify');
    Route::post('/validate', [FinalController::class, 'validate'])->name('validate');
    Route::get('/finish', [FinalController::class, 'finish'])->name('finish');
});

//Social Login
Route::get('auth/{provider}', [SocialLoginController::class, 'redirect']);
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'callback']);


Auth::routes(['verify' => true]);

Route::get('/otp-verify', [LoginController::class, 'otpVerify'])->name('otp.verify');
Route::post('/resend-otp', [LoginController::class, 'resendOtp'])->name('resend-otp');
Route::post('/validate-otp', [LoginController::class, 'validateOtp'])->name('validate.otp');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'user.auth', 'verified']], function () {
    // Route::get('/', [HomeController::class, 'index']);
    Route::get('/', [HomeController::class, 'index'])->name('root');
    Route::post('home/get-ajax-data-latest-booking', [HomeController::class, 'getAjaxDataLatestBooking'])->name('home.get-ajax-data-latest-booking');
    Route::get('/back-to-admin', [HomeController::class, 'back_to_admin'])->name('back-to-admin');
    Route::get('/search-suggestions', [HomeController::class, 'get_suggestions'])->name('home.search.suggestions');
    Route::post('/search', [HomeController::class, 'search'])->name('home.search');
    Route::get('home/profile', [HomeController::class, 'profile'])->name('profile.edit');
    Route::put('home/update-profile/{id}', [HomeController::class, 'update_profile'])->name('profile.update');
    Route::get('home/change-password', [HomeController::class, 'change_password'])->name('home.change-password');
    Route::post('home/update-password/{id}', [HomeController::class, 'update_password'])->name('home.update-password');
    Route::get('home/activity-logs', [HomeController::class, 'activity_logs'])->name('home.activity-logs');
    Route::post('home/get-activity-log-ajax-data', [HomeController::class, 'get_activity_log_ajax_data'])->name('home.get-activity-log-ajax-data');

    //Update User Details
    Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');
    //settings
    Route::prefix('settings')->name('settings.')->group(function () {
        //setting
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::post('/app-name/update', [SettingController::class, 'appNameUpdate'])->name('appname.update');
        Route::post('/email-setting/update', [SettingController::class, 'emailSettingUpdate'])->name('email.setting.update');
        Route::get('/test-mail', [SettingController::class, 'testMail'])->name('test.mail');

        Route::post('/test-mail', [SettingController::class, 'testSendMail'])->name('test.send.mail');
        Route::post('/google-recaptcha-update', [SettingController::class, 'google_recaptcha_update'])->name('google-recaptcha.update');
        Route::post('/social-login-update', [SettingController::class, 'social_login_update'])->name('social-login.update');
        Route::get('create-backup', [SettingController::class, 'create_backup'])->name('create-backup');
        Route::post('get-backup-ajax-data', [SettingController::class, 'getBackupAjaxData'])->name('get-backup-ajax-data');
        Route::delete('delete_backup/{file}', [SettingController::class, 'delete_backup'])->name('delete-backup');
        //Main Menus Routes
        Route::post('main-menus/get-ajax-data', [MainMenuController::class, 'getAjaxData'])->name('main-menus.get-ajax-data');
        Route::get('main-menus/{id}/status', [MainMenuController::class, 'status'])->name('main-menus.status');
        Route::get('main-menus/{id}/restore', [MainMenuController::class, 'restore'])->name('main-menus.restore');
        Route::post('main-menus/update-order', [MainMenuController::class, 'update_order'])->name('main-menus.update-order');
        Route::resource('main-menus', MainMenuController::class);

        //Sub Menus Routes
        Route::post('sub-menus/get-ajax-data', [SubMenuController::class, 'getAjaxData'])->name('sub-menus.get-ajax-data');
        Route::get('sub-menus/{id}/status', [SubMenuController::class, 'status'])->name('sub-menus.status');
        Route::get('sub-menus/{id}/restore', [SubMenuController::class, 'restore'])->name('sub-menus.restore');
        Route::post('sub-menus/update-order', [SubMenuController::class, 'update_order'])->name('sub-menus.update-order');
        Route::resource('sub-menus', SubMenuController::class);
        Route::get('get-sub-menu-by-main-menu', [SubMenuController::class, 'getSubMenuByMainMenu'])->name('sub-menus.get-sub-menu-by-main-menu');

        //Contact Us Routes
        Route::post('contacts/get-ajax-data', [ContactController::class, 'getAjaxData'])->name('contacts.get-ajax-data');
        Route::get('contacts/{id}/status', [ContactController::class, 'status'])->name('contacts.status');
        Route::resource('contacts', ContactController::class);

        //About Us Routes
        Route::post('about-us/get-ajax-data', [AboutController::class, 'getAjaxData'])->name('about-us.get-ajax-data');
        Route::get('about-us/{id}/status', [AboutController::class, 'status'])->name('about-us.status');
        Route::resource('about-us', AboutController::class);

        //Team Routes
        Route::post('teams/get-ajax-data', [\App\Http\Controllers\TeamController::class, 'getAjaxData'])->name('teams.get-ajax-data');
        Route::get('teams/{id}/status', [\App\Http\Controllers\TeamController::class, 'status'])->name('teams.status');
        Route::get('teams/{id}/restore', [\App\Http\Controllers\TeamController::class, 'restore'])->name('teams.restore');
        Route::resource('teams', \App\Http\Controllers\TeamController::class);
    });

    //User Management Routes
    Route::prefix('user-managements')->name('user-managements.')->group(function () {
        //Permissions Routes
        Route::resource('permissions', PermissionController::class);
        //Role Routes
        Route::resource('roles', RoleController::class);
        //Employee Routes
        Route::get('users/{id}/change-password', [UserController::class, 'change_password'])->name('users.change-password');
        Route::post('users/update-password/{id}', [UserController::class, 'update_password'])->name('users.update-password');
        Route::get('users/{id}/status', [UserController::class, 'status'])->name('users.status');
        Route::get('users/{id}/restore', [UserController::class, 'restore'])->name('users.restore');
        Route::get('users/{id}/dashboard', [UserController::class, 'dashboard'])->name('users.dashboard');
        Route::post('users/get-ajax-data', [UserController::class, 'getAjaxData'])->name('users.get-ajax-data');
        Route::resource('users', UserController::class);
        // get user data by id
        Route::get('get-user-data', [UserController::class, 'getUserData'])->name('users.get-user-data');
    });
    //Enquiry Routes
    Route::post('enquiries/get-ajax-data', [EnquiryController::class, 'getAjaxData'])->name('enquiries.get-ajax-data');
    Route::get('enquiries/{id}/restore', [EnquiryController::class, 'restore'])->name('enquiries.restore');
    Route::resource('enquiries', EnquiryController::class);

    //Blog Routes
    Route::prefix('manage-blogs')->name('manage-blogs.')->group(function () {
        //Blog Category Routes
        Route::post('blog-categories/get-ajax-data', [BlogCategoryController::class, 'getAjaxData'])->name('blog-categories.get-ajax-data');
        Route::get('blog-categories/{id}/status', [BlogCategoryController::class, 'status'])->name('blog-categories.status');
        Route::get('blog-categories/{id}/restore', [BlogCategoryController::class, 'restore'])->name('blog-categories.restore');
        Route::resource('blog-categories', BlogCategoryController::class);

        //Blog Routes
        Route::post('blogs/get-ajax-data', [BlogController::class, 'getAjaxData'])->name('blogs.get-ajax-data');
        Route::get('blogs/{id}/status', [BlogController::class, 'status'])->name('blogs.status');
        Route::get('blogs/{id}/restore', [BlogController::class, 'restore'])->name('blogs.restore');
        Route::resource('blogs', BlogController::class);
    });

    //Feature Routes
    Route::post('features/get-ajax-data', [FeatureController::class, 'getAjaxData'])->name('features.get-ajax-data');
    Route::get('features/{id}/status', [FeatureController::class, 'status'])->name('features.status');
    Route::resource('features', FeatureController::class);

    //Case Study Routes
    Route::post('case-studies/get-ajax-data', [CaseStudyController::class, 'getAjaxData'])->name('case-studies.get-ajax-data');
    Route::get('case-studies/{id}/status', [CaseStudyController::class, 'status'])->name('case-studies.status');
    Route::resource('case-studies', CaseStudyController::class);

    //Benefit Routes
    Route::post('benefits/get-ajax-data', [BenefitController::class, 'getAjaxData'])->name('benefits.get-ajax-data');
    Route::get('benefits/{id}/status', [BenefitController::class, 'status'])->name('benefits.status');
    Route::resource('benefits', BenefitController::class);

    //Client Routes
    Route::post('clients/get-ajax-data', [ClientController::class, 'getAjaxData'])->name('clients.get-ajax-data');
    Route::get('clients/{id}/status', [ClientController::class, 'status'])->name('clients.status');
    Route::resource('clients', ClientController::class);

    //Get State By Country Route
    Route::get('get-states', [HomeController::class, 'get_states'])->name('get-states');

    //Get Cities By State Route
    Route::get('get-cities', [HomeController::class, 'get_cities'])->name('get-cities');

    //News Letter Routes
    Route::post('news-letters/get-ajax-data', [NewsLetterController::class, 'getAjaxData'])->name('news-letters.get-ajax-data');
    Route::resource('news-letters', NewsLetterController::class);

    //Slider Routes
    Route::post('sliders/get-ajax-data', [SliderController::class, 'getAjaxData'])->name('sliders.get-ajax-data');
    Route::get('sliders/{id}/status', [SliderController::class, 'status'])->name('sliders.status');
    Route::resource('sliders', SliderController::class);

    //Faqs Routes
    Route::post('faqs/get-ajax-data', [FAQController::class, 'getAjaxData'])->name('faqs.get-ajax-data');
    Route::get('faqs/{id}/status', [FAQController::class, 'status'])->name('faqs.status');
    Route::resource('faqs', FAQController::class);

    //Service Routes
    Route::post('services/get-ajax-data', [ServiceController::class, 'getAjaxData'])->name('services.get-ajax-data');
    Route::get('services/{id}/status', [ServiceController::class, 'status'])->name('services.status');
    Route::resource('services', ServiceController::class);

    //Testimonials Routes
    Route::post('testimonials/get-ajax-data', [TestimonialController::class, 'getAjaxData'])->name('testimonials.get-ajax-data');
    Route::get('testimonials/{id}/status', [TestimonialController::class, 'status'])->name('testimonials.status');
    Route::resource('testimonials', TestimonialController::class);

    //Language Translation
    Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
});

// Route::get('/', function () {
//     return redirect('admin');
// })->name('website.index');
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/privacy-policy', [WebsiteController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/blog-details/{slug}', [WebsiteController::class, 'blog_details'])->name('blog-details');
Route::post('/enquiry/store', [WebsiteController::class, 'enquiry_store'])->name('enquiry.store');
Route::post('newsletter/subscribe', [WebsiteController::class, 'subscribe_newsletter'])->name('newsletter.subscribe');
