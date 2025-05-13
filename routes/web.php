<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
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

    //ssdi
    Route::get('/samaira-skill-development-institute', 'samairaskills')->name('ssdi');
    Route::get('/samaira-skill-development-institute/about', 'samairaskillsAbout')->name('ssdi.about');
    Route::get('/samaira-skill-development-institute/course/{course:slug}', 'ssdiCourse')->name('ssdi.course');
    Route::get('/samaira-skill-development-institute/course/enroll/{course:slug}', 'ssdiCourseEnroll')->name('ssdi.course.enroll');
    Route::get('/samaira-skill-development-institute/contact-us', 'ssdiContact')->name('ssdi.contact');
    //language
    Route::get('/samaira-language-institute', 'samairaskillsJapan')->name('samairaskills.japan');
    Route::get('/samaira-aviation-limithed', 'samairatravels')->name('samairatravels');
    Route::get('/mp-travels-limited', 'samairamptravels')->name('samairamptravels');
    Route::get('/samairaskills/contact', 'samairacontact')->name('samairacontact');
    Route::get('/joypur-homes-limited', 'samairajoypurhomes')->name('samairajoypurhomes');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
