<?php

use App\Http\Controllers\AviationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SystemController;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test', function () {
    dd(system_key('system_facebook') ?? 'system_facebook');
});

Route::get('/test-mail', function () {
    return view('mail.enroll');
});


Route::get('/admin', function () {
    return redirect(route('login'));
});

Route::group(['controller' => PagesController::class, 'as' => 'page.'], function () {
    //group
    Route::get('/', 'samairagroup')->name('home');
    Route::get('/about-us', 'samairagroupAbout')->name('home.about');
    Route::get('/contact-us', 'samairagroupContact')->name('home.contact');
    Route::get('/privacies', 'samairagroupPrivacy')->name('home.privacy');

    Route::get('/awards', 'awards')->name('awards');
    Route::get('/chairman-profile', 'chairman')->name('chairman');
    Route::get('/news', 'news')->name('news');
    Route::get('/news/{news}', 'newssingle')->name('single.news');
    Route::get('/carrer', 'carrer')->name('carrer');

    //ssdi
    Route::get('/samaira-skill-development-institute', 'samairaskills')->name('ssdi');
    Route::get('/samaira-skill-development-institute/about-us', 'samairaskillsAbout')->name('ssdi.about');
    Route::get('/ssdi/course/{course:slug}', 'ssdiCourse')->name('ssdi.course');
    Route::get('/ssdi/course/enroll/{course:slug}', 'ssdiCourseEnroll')->name('ssdi.course.enroll');
    Route::get('/samaira-skill-development-institute/contact-us', 'ssdiContact')->name('ssdi.contact');
    //language
    Route::get('/samaira-language-institute', 'samairaskillsJapan')->name('japan');
    Route::get('/samaira-language-institute/course/{course:slug}', 'ssdiCourse')->name('japan.course');
    Route::get('/samaira-language-institute/course/enroll/{course:slug}', 'ssdiCourseEnroll')->name('japan.course.enroll');
    Route::get('/samaira-language-institute/about-us', 'samairaskillsJapanAbout')->name('japan.about');
    Route::get('/samaira-language-institute/contact-us', 'samairaskillsJapanContact')->name('japan.contact');
    //jphomes
    Route::get('/joypur-homes-limited', 'jphomes')->name('jphomes');
    Route::get('/joypur-homes-limited/properties/{category:slug}', 'properties')->name('jphomes.properties');
    Route::get('/joypur-homes-limited/about-us', 'jphomesAbout')->name('jphomes.about');
    Route::get('/joypur-homes-limited/contact-us', 'jphomesContact')->name('jphomes.contact');
    Route::get('/joypur-homes-limited/single-property/{property:slug}', 'jphomesSingleProperty')->name('jphomes.SingleProperty');
    //medica
    Route::get('/samaira-medica-limited', 'samairamedica')->name('medica');
    Route::get('/samaira-medica-limited/product/{product}', 'medicaProduct')->name('medica.product');
    Route::get('/samaira-medica-limited/about-us', 'samairamedicaAbout')->name('medica.about');
    Route::get('/samaira-medica-limited/contact-us', 'samairamedicaContact')->name('medica.contact');
    Route::get('/samaira-medica-limited/shop', 'samairamedicaShop')->name('medica.shop');
    Route::get('/samaira-medica-limited/checkout', 'medicaCheckout')->name('medica.checkout');
    //gold
    Route::get('/princess-gold-and-diamond-cottation', 'princessgold')->name('gold');
    Route::get('/princess-gold-and-diamond-cottation/about-us', 'goldAbout')->name('gold.about');
    Route::get('/princess-gold-and-diamond-cottation/contact-us', 'goldContact')->name('gold.contact');
    //job
    Route::get('/samaira-jobs-bridge-limited', 'samairajobs')->name('job');
    Route::get('/samaira-jobs-bridge-limited/about-us', 'jobAbout')->name('job.about');
    Route::get('/samaira-jobs-bridge-limited/contact-us', 'jobContact')->name('job.contact');
    Route::get('/samaira-jobs-bridge-limited/apply/works/{work}', 'jobApply')->name('job.apply');
    // joypur agro
    Route::get('/joypur-agro-limited', 'joypuragro')->name('agro');
    Route::get('/joypur-agro-limited/about-us', 'agroAbout')->name('agro.about');
    Route::get('/joypur-agro-limited/contact-us', 'agroContact')->name('agro.contact');

    // Samaira Aviation
    Route::get('/samaira-aviation-limited', 'samairaaviation')->name('aviation');
    Route::get('/samaira-aviation-limited/about-us', 'aviationAbout')->name('aviation.about');
    Route::get('/samaira-aviation-limited/contact-us', 'aviationContact')->name('aviation.contact');
    Route::get('/samaira-aviation-limited/checkout', 'samairaaviationcheckout')->name('aviation.checkout');
    // emerging
    Route::get('/emerging-office-supplies-limited', 'emerging')->name('emerging');
    Route::get('/emerging-office-supplies-limited/shop', 'emergingShop')->name('emerging.shop');
    Route::get('/emerging-office-supplies-limited/about-us', 'emergingAbout')->name('emerging.about');
    Route::get('/emerging-office-supplies-limited/contact-us', 'emergingContact')->name('emerging.contact');
    Route::get('/emerging-office-supplies-limited/product/{product}', 'emergingProduct')->name('emerging.product');
    Route::get('/emerging-office-supplies-limited/checkout', 'emergingCheckout')->name('emerging.checkout');
    //raisa trade
    Route::get('/raisa-trade-international', 'raisatrade')->name('raisa');
    Route::get('/raisa-trade-international/about-us', 'raisaAbout')->name('raisa.about');
    Route::get('/raisa-trade-international/contact-us', 'raisaContact')->name('raisa.contact');





    Route::get('/developers', function () {
        return view('frontend.content.developers');
    });






    Route::get('/mp-travels-limited', 'samairamptravels')->name('samairamptravels');


    Route::get('/coming/soon', 'comingsoon')->name('comingsoon');

});
Route::group(['controller' => ProfileController::class, 'as' => 'profile.'], function () {
    Route::post('/update-password', 'updatePassword')->name('update-password');
    Route::post('/profile/update', 'updateProfile')->name('update-profile');
    Route::get('/profile/remove-avatar', 'removeAvatar')->name('removeAvatar');
});
Route::group(['controller' => CourseController::class, 'as' => 'course.'], function () {
    Route::post('/store/enroll', 'storeCourseEnroll')->name('store.enroll');
});
Route::group(['controller' => ContentController::class, 'as' => 'content.'], function () {
    Route::post('/store/contct', 'storeContact')->name('store.contact');
});
Route::group(['controller' => PropertyController::class, 'as' => 'property.'], function () {
    Route::post('/store/agent', 'storeAgent')->name('store.agent');
    Route::post('/store/comment', 'storeComment')->name('store.comment');
    Route::post('/store/order', 'storeOrder')->name('store.order');
});
Route::group(['controller' => CartController::class, 'as' => 'cart.'], function () {
    Route::post('/cart/add', 'add')->name('add');
    Route::post('/cart/remove', 'remove')->name('remove');

});
Route::group(['controller' => OrderController::class, 'as' => 'order.'], function () {
    Route::post('/order/store', 'store')->name('store');
    Route::post('/emerging/order/store', 'storeEmerging')->name('store.emerging');

});
Route::group(['controller' => JobController::class, 'as' => 'job.'], function () {
    Route::post('/job/apply', 'storeApply')->name('store.apply');
});
Route::group(['controller' => AviationController::class, 'as' => 'aviation.'], function () {
    Route::post('/avaition/request', 'avaitionRequest')->name('request');
    Route::post('/store/avaition/request', 'storeAviationRequest')->name('request.store');
});
Route::group(['controller' => SystemController::class, 'as' => 'system.'], function () {
    Route::post('/store/news/letter', 'storeNewsLetter')->name('store.newsletter');
});

Auth::routes();


Route::middleware(['auth', 'role:student,admin'])->prefix('student')->as('student.')->group(function () {
    Route::controller(StudentController::class)->group(function () {
        Route::get('/dashboard', 'studentDashboard')->name('dashboard');
        Route::get('/profile', 'studentProfile')->name('profile');
        Route::post('/store/review', 'storeReview')->name('store.review');

        Route::get('/certificate', 'certificate')->name('certificate');
    });
});
Route::middleware('guest')->prefix('student')->as('student.')->group(function () {
    Route::controller(StudentController::class)->group(function () {
        Route::get('/login', 'studentLogin')->name('login');
        Route::get('/register', 'studentRegister')->name('register');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
