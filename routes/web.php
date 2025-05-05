<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test', function () {
    dd(system_key('system_facebook') ?? 'system_facebook');
});
Route::get('/admin', function () {
    return redirect(route('login'));
})->name('login');

Route::group(['controller' => PagesController::class, 'as' => 'page.'], function () {
    Route::get('/', 'samairagroup')->name('samairagroup');
    Route::get('/samaira-skill-development-institute', 'samairaskills')->name('samairaskills');
    Route::get('/samaira-skill-development-institute/course/{course:slug}', 'ssdiCourse')->name('ssdi.course');
    Route::get('/samaira-language-institute', 'samairaskillsJapan')->name('samairaskills.japan');
    Route::get('/samaira-aviation-limithed', 'samairatravels')->name('samairatravels');
    Route::get('/mp-travels-limited', 'samairamptravels')->name('samairamptravels');
    Route::get('/samairaskills/contact', 'samairacontact')->name('samairacontact');
    Route::get('/joypur-homes-limited', 'samairajoypurhomes')->name('samairajoypurhomes');
    Route::get('/enroll/page', 'enrollpage')->name('enrollpage');
   
});
Route::group(['controller' => ProfileController::class, 'as' => 'profile.'], function () {
    Route::post('/update-password', 'updatePassword')->name('update-password');
    Route::post('/profile/update', 'updateProfile')->name('update-profile');
    Route::get('/profile/remove-avatar', 'removeAvatar')->name('removeAvatar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
