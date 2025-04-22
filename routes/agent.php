<?php

use App\Http\Controllers\Agent\PagesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:agent,admin'])
    ->prefix('agent')
    ->group(function () {
        Route::group(['controller' => PagesController::class], function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
            Route::get('/profile', 'profile')->name('profile');
        });
    });
