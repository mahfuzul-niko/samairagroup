<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test', function () {
    dd(system_key('header_twitter') ?? 'header_twitter');
});


Route::group(['controller' => PagesController::class, 'as' => 'page.'], function () {
    Route::get('/', 'samairagrop')->name('samairagrop');
    Route::get('/samairaskills', 'samairaskills')->name('samairaskills');
    Route::get('/samairaskills/japan', 'samairaskillsJapan')->name('samairaskills.japan');
    Route::get('/samairatravels', 'samairatravels')->name('samairatravels');
   
});
Route::group(['controller' => ProfileController::class, 'as' => 'profile.'], function () {
    Route::post('/update-password', 'updatePassword')->name('update-password');
    Route::post('/profile/update', 'updateProfile')->name('update-profile');
    Route::get('/profile/remove-avatar', 'removeAvatar')->name('removeAvatar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
