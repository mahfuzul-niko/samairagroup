<?php

use App\Http\Controllers\Agent\PagesController;
use App\Http\Controllers\SamairaGroupController;
use App\Http\Controllers\SamariaSkill;
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

            Route::get('/system/header', 'systemHeader')->name('header');
            Route::get('/system/footer', 'systemFooter')->name('footer');

            Route::post('/system/store/footer/concern', 'storeFooterConcern')->name('store.footerConcern');
            Route::Delete('/system/delete/footer/concern/{id}', 'destroyFooterConcern')->name('destroy.footerConcern');

            Route::post('/system/store/footer/link', 'storeFooterLink')->name('store.footerlink');
            Route::Delete('/system/delete/footer/link/{id}', 'destroyFooterLink')->name('destroy.footerlink');

            Route::get('/system', 'system')->name('index');
            Route::post('/system/store', 'store')->name('store');
            Route::post('/system/store-image','storeImage')->name('storeImage');
            Route::post('/system/update/{id}', 'update')->name('update');
            Route::Delete('/system/delete/{id}', 'destroy')->name('destroy');
            Route::post('/system/image/delete/{key}', 'destroyImage')->name('destroy.image');

        });
        Route::group(['controller' => SamairaGroupController::class, 'as' => 'group.'], function () {
            Route::get('/SamairaGroup', 'index')->name('index');
            Route::post('/SamairaGroup/banner/store', 'storeBanner')->name('store.banner');
            Route::post('/SamairaGroup/banner/update/{group_banner}', 'updateBanner')->name('update.banner');
            Route::delete('/SamairaGroup/banner/delete/{group_banner}', 'destroyBanner')->name('delete.banner');
            
            Route::post('/SamairaGroup/concern/store', 'storeConcern')->name('store.concern');
            Route::post('/SamairaGroup/concern/update/{concern}', 'updateConcern')->name('update.concern');
            Route::delete('/SamairaGroup/concern/delete/{concern}', 'destroyConcern')->name('delete.concern');

            Route::post('/SamairaGroup/partner/store', 'storePartner')->name('store.partner');
            Route::post('/SamairaGroup/partner/update/{partner}', 'updatePartner')->name('update.partner');
            Route::delete('/SamairaGroup/partner/delete/{partner}', 'destroyPartner')->name('delete.partner');

            Route::post('/SamairaGroup/about/store', 'storeAbout')->name('store.about');
            Route::post('/SamairaGroup/about/update/{about}', 'updateAbout')->name('update.about');
            Route::delete('/SamairaGroup/about/delete/{about}', 'destroyAbout')->name('delete.about');

        });
        Route::group(['controller' => SamariaSkill::class,'as'=>'group.'], function () {
            Route::get('/samairaskills', 'samairaSkill')->name('samairaskill');
            Route::post('/SamairaGroup/certified/store', 'storeCertified')->name('store.certified');
            Route::post('/SamairaGroup/certified/update/{certified}', 'updateCertified')->name('update.certified');
            Route::delete('/SamairaGroup/certified/delete/{certified}', 'destroyCertified')->name('delete.certified');

            Route::post('/SamairaGroup/advertise/store', 'storeAdvertise')->name('store.advertise');
        });
        

    });
