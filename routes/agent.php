<?php

use App\Http\Controllers\Agent\PagesController;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:agent,admin'])
    ->prefix('agent')
    ->group(function () {
        Route::group(['controller' => PagesController::class], function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
            Route::get('/profile', 'profile')->name('profile');
        });
        Route::group(['controller' => SystemController::class, 'as' => 'system.'], function () {
            Route::get('/system', 'system')->name('index');
            Route::post('/system/store', 'systemStore')->name('store');

        });
    });
