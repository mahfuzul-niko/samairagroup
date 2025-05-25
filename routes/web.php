<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

    Route::get('/new-dashboard', 'newdashboard')->name('newdashboard');
    Route::get('/awards', 'awards')->name('awards');
    Route::get('/chairman', 'chairman')->name('chairman');
    Route::get('/news', 'news')->name('news');
    Route::get('/news/single', 'newssingle')->name('newssingle');
    Route::get('/carrer', 'carrer')->name('carrer');

    //ssdi
    Route::get('/samaira-skill-development-institute', 'samairaskills')->name('ssdi');
    Route::get('/samaira-skill-development-institute/about-us', 'samairaskillsAbout')->name('ssdi.about');
    Route::get('/course/{course:slug}', 'ssdiCourse')->name('ssdi.course');
    Route::get('/course/enroll/{course:slug}', 'ssdiCourseEnroll')->name('ssdi.course.enroll');
    Route::get('/samaira-skill-development-institute/contact-us', 'ssdiContact')->name('ssdi.contact');
    //language
    Route::get('/samaira-language-institute', 'samairaskillsJapan')->name('japan');
    Route::get('/samaira-language-institute/about-us', 'samairaskillsJapanAbout')->name('japan.about');
    Route::get('/samaira-language-institute/contact-us', 'samairaskillsJapanContact')->name('japan.contact');

    Route::get('/joypur-homes-limited', 'jphomes')->name('jphomes');
    Route::get('/joypur-homes-limited/about-us', 'jphomesAbout')->name('jphomes.about');
    Route::get('/joypur-homes-limited/contact-us', 'jphomesContact')->name('jphomes.contact');
    Route::get('/joypur-homes-limited/single-property', 'jphomesSingleProperty')->name('jphomes.SingleProperty');

    
    Route::get('/samaira-aviation-limithed', 'samairatravels')->name('samairatravels');
    Route::get('/mp-travels-limited', 'samairamptravels')->name('samairamptravels');
    Route::get('/samairaskills/contact', 'samairacontact')->name('samairacontact');
    Route::get('/enroll/page', 'enrollpage')->name('enrollpage');


    Route::get('/contact/us', 'contactus')->name('contactus');


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
