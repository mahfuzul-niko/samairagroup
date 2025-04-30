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
    Route::get('/samairaskills', 'samairaskills')->name('samairaskills');
    Route::get('/samairaskills/japan', 'samairaskillsJapan')->name('samairaskills.japan');
    Route::get('/samairatravels', 'samairatravels')->name('samairatravels');
    Route::get('/samairamptravels', 'samairamptravels')->name('samairamptravels');
    Route::get('/samairaskills/singlecourse', 'samairasinglecourse')->name('samairasinglecourse');
    Route::get('/samairaskills/contact', 'samairacontact')->name('samairacontact');
   
});
Route::group(['controller' => ProfileController::class, 'as' => 'profile.'], function () {
    Route::post('/update-password', 'updatePassword')->name('update-password');
    Route::post('/profile/update', 'updateProfile')->name('update-profile');
    Route::get('/profile/remove-avatar', 'removeAvatar')->name('removeAvatar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
