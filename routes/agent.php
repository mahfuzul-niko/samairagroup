<?php

use App\Http\Controllers\Agent\PagesController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LanguageController;
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
            Route::post('/system/store-image', 'storeImage')->name('storeImage');
            Route::post('/system/update/{id}', 'update')->name('update');
            Route::Delete('/system/delete/{id}', 'destroy')->name('destroy');
            Route::post('/system/image/delete/{key}', 'destroyImage')->name('destroy.image');

            Route::get('/system/roles', 'systemRole')->name('role');
            Route::post('/system/store/role', 'storeRole')->name('store.role');
            Route::post('/system/update/role/{id}', 'updateRole')->name('update.role');
            Route::Delete('/system/delete/role/{id}', 'destroyRole')->name('destroy.role');

            Route::get('/system/member', 'systemMember')->name('member');
            Route::post('/system/store/member', 'storeMember')->name('store.member');
            Route::Delete('/system/delete/member/{id}', 'destroyMember')->name('destroy.member');

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
        Route::group(['controller' => SamariaSkill::class, 'as' => 'group.'], function () {
            Route::get('/samairaskills', 'samairaSkill')->name('samairaskill');
            Route::post('/SamairaGroup/certified/store', 'storeCertified')->name('store.certified');
            Route::post('/SamairaGroup/certified/update/{certified}', 'updateCertified')->name('update.certified');
            Route::delete('/SamairaGroup/certified/delete/{certified}', 'destroyCertified')->name('delete.certified');
            Route::post('/SamairaGroup/advertise/store', 'storeAdvertise')->name('store.advertise');



        });

        Route::group(['controller' => CourseController::class, 'as' => 'course.'], function () {
            Route::get('/course/category', 'courseCategory')->name('category');
            Route::post('/course/category/store', 'storeCategory')->name('category.store');
            Route::post('/course/category/update/{category}', 'updateCategory')->name('category.update');
            Route::delete('/course/category/delete/{category}', 'destroyCategory')->name('category.delete');


            Route::get('/create/course', 'createCourse')->name('create');
            Route::get('/edit/course/{course:slug}', 'createEdit')->name('edit');
            Route::get('/courses', 'course')->name('course');
            Route::get('/courses/ssdi', 'courseSsdi')->name('ssdi');
            Route::get('/courses/language', 'courseLanguage')->name('language');
            Route::get('/courses/view/{course:slug}', 'courseView')->name('view');
            Route::post('/course/store', 'storeCourse')->name('store');
            Route::post('/course/update/{course}', 'updateCourse')->name('update');
            Route::delete('/course/delete/{course}', 'destroyCourse')->name('delete');



            Route::post('/course/store/module', 'storeModule')->name('store.module');
            Route::delete('/course/module/delete/{module}', 'destroyModule')->name('delete.module');

            Route::get('/ssdi/enroll/list', 'ssdiEnrollList')->name('ssdi.enroll');
            Route::post('/enroll/mark/{enroll}', 'updateMark')->name('enroll.mark');
            Route::post('/enroll/update/{enroll}', 'updateEnroll')->name('update.enroll');
            Route::delete('/course/enroll/delete/{enroll}', 'destroyEnroll')->name('delete.enroll');

            Route::get('/course/all/trainers', 'trainer')->name('trainer');
            Route::post('/course/store/trainer', 'storeTrainer')->name('store.trainer');
            Route::post('/course/updaye/trainer/{trainer}', 'updateTrainer')->name('update.trainer');
            Route::delete('/course/trainer/delete/{trainer}', 'destroyTrainer')->name('delete.trainer');

            Route::get('/course/feature', 'courseFeatured')->name('feature');
            Route::post('/course/store/feature', 'storeFeature')->name('store.feature');
            Route::post('/course/update/feature/{feature}', 'updateFeature')->name('update.feature');
            Route::delete('/course/feature/delete/{feature}', 'destroyFeature')->name('delete.feature');
        });

        Route::group(['controller' => ContentController::class, 'as' => 'content.'], function () {
            //about banner
            Route::post('/content/store/about/banner', 'storeAboutBanner')->name('about.store.banner');
            Route::delete('/content/delete/about/banner/{banner}', 'deleteAboutBanner')->name('about.delete.banner');
            //about
            Route::post('/content/store/about', 'storeAbout')->name('store.about');
            Route::post('/content/update/about/{about}', 'updateAbout')->name('update.about');
            Route::delete('/content/delete/about/{about}', 'deleteAbout')->name('delete.about');
            //contact banner
            Route::post('/content/store/contact/banner', 'storeContactBanner')->name('contact.store.banner');
            Route::delete('/content/delete/contact/banner/{banner}', 'deleteContactBanner')->name('contact.delete.banner');
            //contact info
            Route::post('/content/save/contact/info', 'saveContactInfo')->name('save.contact.info');
            //contact subject
            Route::post('/content/store/contact/subject', 'storeContactSubject')->name('contact.store.subject');
            Route::delete('/content/delete/contact/subject/{subject}', 'deleteContactSubject')->name('contact.delete.subject');

            //backed views
            Route::get('/content/contact/{key}', 'viewContact')->name('view.contact');
        });
        Route::group(['controller' => LanguageController::class, 'as' => 'group.'], function () {
            Route::get('/samaira-language-japan', 'language')->name('language');
            Route::post('/samaira-language-japan/store/stories', 'storeStory')->name('store.story');
            Route::post('/samaira-language-japan/store/{story}', 'updateStory')->name('update.story');
            Route::delete('/samaira-language-japan/delete/{story}', 'deleteStory')->name('delete.story');
        });




    });
