<?php

use App\Http\Controllers\Agent\PagesController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MedicaController;
use App\Http\Controllers\PropertyController;
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

            Route::post('samairaskills/banner/store', 'storeBanner')->name('ssdi.store.banner');
            Route::post('samairaskills/banner/update/{banner}', 'updateBanner')->name('ssdi.update.banner');
            Route::delete('samairaskills/banner/delete/{banner}', 'destroyBanner')->name('ssdi.delete.banner');



        });

        Route::group(['controller' => CourseController::class, 'as' => 'ssdi.'], function () {
            Route::get('/course/ssdi/category', 'courseCategory')->name('category');
            Route::get('/create/ssdi/course', 'createSSDICourse')->name('create');
            Route::get('/edit/ssdi/course/{course:slug}', 'createSSDiEdit')->name('edit');
            Route::get('/ssdi/course/list', 'courseSsdi')->name('courses');
            Route::get('/courses/ssdi/view/{course:slug}', 'courseSSDiView')->name('view');
            Route::get('/course/all/trainers', 'trainer')->name('trainer');
            Route::get('/ssdi/enroll/list', 'ssdiEnrollList')->name('enroll');
            Route::get('/ssdi/course/feature', 'courseSSDIFeatured')->name('feature');
        });
        //language
        Route::group(['controller' => CourseController::class, 'as' => 'language.'], function () {
            // Route::get('/courses/language', 'courseLanguage')->name('language');
            Route::get('/create/language/course', 'createLanguageCourse')->name('create');
            Route::get('/edit/language/course/{course:slug}', 'createLanguageEdit')->name('edit');
            Route::get('/language/course/list', 'courseLanguage')->name('courses');
            Route::get('/courses/language/view/{course:slug}', 'courseLanguageView')->name('view');
            Route::get('/language/enroll/list', 'languageEnrollList')->name('enroll');
            Route::get('/language/course/feature', 'courseLanguageFeatured')->name('feature');
        });

        Route::group(['controller' => CourseController::class, 'as' => 'course.'], function () {
            Route::get('/courses', 'course')->name('course');

            // Route::get('/course/feature', 'courseFeatured')->name('feature');
    

            Route::post('/course/category/store', 'storeCategory')->name('category.store');
            Route::post('/course/category/update/{category}', 'updateCategory')->name('category.update');
            Route::delete('/course/category/delete/{category}', 'destroyCategory')->name('category.delete');
            Route::post('/course/store', 'storeCourse')->name('store');
            Route::post('/course/update/{course}', 'updateCourse')->name('update');
            Route::delete('/course/delete/{course}', 'destroyCourse')->name('delete');
            Route::post('/course/store/module', 'storeModule')->name('store.module');
            Route::delete('/course/module/delete/{module}', 'destroyModule')->name('delete.module');
            Route::post('/enroll/mark/{enroll}', 'updateMark')->name('enroll.mark');
            Route::post('/enroll/update/{enroll}', 'updateEnroll')->name('update.enroll');
            Route::delete('/course/enroll/delete/{enroll}', 'destroyEnroll')->name('delete.enroll');
            Route::post('/course/store/trainer', 'storeTrainer')->name('store.trainer');
            Route::post('/course/updaye/trainer/{trainer}', 'updateTrainer')->name('update.trainer');
            Route::delete('/course/trainer/delete/{trainer}', 'destroyTrainer')->name('delete.trainer');
            Route::post('/course/store/feature', 'storeFeature')->name('store.feature');
            Route::post('/course/update/feature/{feature}', 'updateFeature')->name('update.feature');
            Route::delete('/course/feature/delete/{feature}', 'destroyFeature')->name('delete.feature');
        });
        Route::group(['controller' => ContentController::class, 'as' => 'editional.'], function () {
            Route::get('/editional/review', 'review')->name('view.review');
            Route::get('/editional/certificate', 'certificate')->name('certificate');
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

            Route::get('/content/contact/{key}', 'viewContact')->name('view.contact');
            Route::delete('/content/delete/contact/{contact}}', 'deleteContact')->name('contact.delete');

            //review views
    
            Route::post('/content/store/review', 'storeReview')->name('store.review');
            Route::post('/content/update/review/{review}', 'updateReview')->name('update.review');
            Route::delete('/content/delete/review/{review}', 'deleteReview')->name('delete.review');
            Route::post('/content/review/{review}', 'updateMarkReview')->name('review.mark');

            //certificate
    
            Route::post('/content/store/certificate', 'storeCertificate')->name('store.certificate');
            Route::delete('/content/delete/certificate/{certificate}', 'deleteCertificate')->name('delete.certificate');

            //banner 
            Route::post('/content/store/banner', 'storeBanner')->name('store.banner');
            Route::post('/content/update/banner/{banner}', 'updateBanner')->name('update.banner');
            Route::delete('/content/delete/banner/{banner}', 'deleteBanner')->name('delete.banner');

            //awards
            Route::post('/content/store/award', 'storeAward')->name('store.award');
            Route::post('/content/update/award/{award}', 'updateAward')->name('update.award');
            Route::delete('/content/delete/award/{award}', 'deleteAward')->name('delete.award');

            //chairman
            Route::post('/content/store/chairman', 'storeChairman')->name('store.chairman');
            Route::post('/content/store/chairman/image', 'storeChairmanImage')->name('store.chairman.image');

            //news
            Route::post('/content/store/news', 'storeNews')->name('store.news');
            Route::post('/content/update/news/{news}', 'updateNews')->name('update.news');
            Route::delete('/content/delete/news/{news}', 'deleteNews')->name('delete.news');
        });
        Route::group(['controller' => LanguageController::class, 'as' => 'group.'], function () {
            Route::get('/samaira-language-japan', 'language')->name('language');
            Route::post('/samaira-language-japan/store/stories', 'storeStory')->name('store.story');
            Route::post('/samaira-language-japan/store/{story}', 'updateStory')->name('update.story');
            Route::delete('/samaira-language-japan/delete/{story}', 'deleteStory')->name('delete.story');
        });
        Route::group(['controller' => PropertyController::class, 'as' => 'group.'], function () {
            Route::get('/samaira-joypur-homes-limited', 'Property')->name('jphomes');
        });
        Route::group(['controller' => PropertyController::class, 'as' => 'jphomes.'], function () {
            Route::get('/samaira-joypur-homes-limited/list/category', 'category')->name('category');
            Route::post('/samaira-joypur-homes-limited/store/category', 'storePropertyCategory')->name('store.category');
            Route::post('/samaira-joypur-homes-limited/update/category/{category}', 'updatePropertyCategory')->name('update.category');
            Route::delete('/samaira-joypur-homes-limited/delete/category/{category}', 'deletePropertyCategory')->name('delete.category');

            Route::get('/samaira-joypur-homes-limited/create/property', 'createProperty')->name('create.property');
            Route::get('/samaira-joypur-homes-limited/properties', 'properties')->name('properties');
            Route::post('/samaira-joypur-homes-limited/store/property', 'storeProperty')->name('store.property');
            Route::get('/samaira-joypur-homes-limited/edit/property/{property:slug}', 'editProperty')->name('edit.property');
            Route::post('/samaira-joypur-homes-limited/update/property/{property}', 'updateProperty')->name('update.property');
            Route::delete('/samaira-joypur-homes-limited/delete/property/{property}', 'deleteProperty')->name('delete.property');

            Route::post('/samaira-joypur-homes-limited/store/review', 'storeReview')->name('store.review');
            Route::delete('/samaira-joypur-homes-limited/delete/review/{review}', 'deleteReview')->name('delete.review');

            Route::get('/samaira-joypur-homes-limited/create/video/property', 'createVideoProperty')->name('create.property.video');
            Route::post('/samaira-joypur-homes-limited/store/video/property', 'storeVideoProperty')->name('store.property.video');
            Route::post('/samaira-joypur-homes-limited/update/video/property/{videoProperty}', 'updateVideoProperty')->name('update.property.video');
            Route::delete('/samaira-joypur-homes-limited/delete/video/property/{videoProperty}', 'deleteVideoProperty')->name('delete.property.video');

            Route::post('/samaira-joypur-homes-limited/store/partner', 'storePartner')->name('store.partner');
            Route::delete('/samaira-joypur-homes-limited/delete/partner/{partner}', 'deletePartner')->name('delete.partner');
            Route::get('/samaira-joypur-homes-limited/agent/requests', 'agentRequests')->name('agent.requests');
            Route::post('/agent-request/mark/{agent}', 'updateMark')->name('request.mark');

            Route::post('/samaira-joypur-homes-limited/store/images', 'storeImages')->name('store.images');
            Route::delete('/samaira-joypur-homes-limited/delete/images/{id}', 'deleteImage')->name('delete.images');

            Route::get('/samaira-joypur-homes-limited/comments', 'comments')->name('comments');
            Route::delete('/samaira-joypur-homes-limited/delete/comment/{comment}', 'deleteComment')->name('delete.comment');
            Route::post('/asamaira-joypur-homes-limited/mark/comment/{comment}', 'updateCommentMark')->name('comment.approve');

            Route::get('/samaira-joypur-homes-limited/orders', 'orders')->name('orders');
            Route::delete('/samaira-joypur-homes-limited/delete/order/{order}', 'deleteOrder')->name('delete.order');
            Route::post('/asamaira-joypur-homes-limited/mark/order/{order}', 'updateOrderMark')->name('order.approve');
        });
        Route::group(['controller' => MedicaController::class, 'as' => 'group.'], function () {
            Route::get('/samaira-medica-limited', 'Medica')->name('medica');
        });
        Route::group(['controller' => ContentController::class, 'as' => 'page.'], function () {
            Route::get('/awards', 'awards')->name('awards');
            Route::get('/chairman', 'chairman')->name('chairman');
            Route::get('/news-&-event', 'newses')->name('news');
            Route::get('/news-&-event/edit/{news}', 'editNews')->name('edit.news');
        });
        Route::group(['controller' => MedicaController::class, 'as' => 'medica.'], function () {
            Route::get('/samaira-medica-limited/categories', 'categories')->name('categories');
            Route::post('/samaira-medica-limited/store/category', 'storeCategory')->name('store.category');
            Route::post('/samaira-medica-limited/update/category/{category}', 'updateCategory')->name('update.category');
            Route::delete('/samaira-medica-limited/delete/category/{category}', 'deleteCategory')->name('delete.category');


            Route::get('/samaira-medica-limited/reviews', 'reviews')->name('reviews');
            Route::post('/samaira-medica-limited/store/review', 'storeReview')->name('store.review');
            Route::post('/samaira-medica-limited/update/review/{review}', 'updateReview')->name('update.review');
            Route::delete('/samaira-medica-limited/delete/review/{review}', 'deleteReview')->name('delete.review');

            Route::post('/samaira-medica-limited/store/partner', 'storePartner')->name('store.partner');
            Route::delete('/samaira-medica-limited/delete/partner/{partner}', 'deletePartner')->name('delete.partner');

            Route::get('/samaira-medica-limited/products', 'products')->name('products');
            Route::get('/samaira-medica-limited/create/product', 'productCreate')->name('product.create');
            Route::get('/samaira-medica-limited/edit/product/{product}', 'productEdit')->name('product.edit');
            Route::post('/samaira-medica-limited/store/products', 'storeProduct')->name('store.product');
            Route::post('/samaira-medica-limited/update/products/{product}', 'updateProduct')->name('update.product');
            Route::delete('/samaira-medica-limited/delete/products/{product}', 'deleteProduct')->name('delete.product');

            Route::post('/samaira-medica-limited/store/images', 'storeImages')->name('store.images');
            Route::delete('/samaira-medica-limited/delete/images/{id}', 'deleteImage')->name('delete.images');
        });




    });
