<?php

use App\Http\Controllers\Agent\PagesController;
use App\Http\Controllers\AgroController;
use App\Http\Controllers\AviationController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmergingController;
use App\Http\Controllers\GoldController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MedicaController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RaisaController;
use App\Http\Controllers\SamairaGroupController;
use App\Http\Controllers\SamariaSkill;
use App\Http\Controllers\SpsController;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;

Route::prefix('agent')
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
            Route::post('/system/update/member/role/{member}', 'updateMemberRole')->name('update.member.role');
            Route::Delete('/system/delete/member/{id}', 'destroyMember')->name('destroy.member');


            Route::post('/system/store/concern/content', 'storeOrUpdateConcernContent')->name('store.concern.content');

        });
        Route::group(['controller' => SystemController::class, 'as' => 'news.'], function () {

            Route::get('/system/news-letter', 'systemNewsLetter')->name('letter');


        });
        Route::group(['controller' => SamairaGroupController::class, 'as' => 'group.'], function () {
            Route::get('/samaira-group', 'index')->name('index');
            Route::post('/samaira-group/banner/store', 'storeBanner')->name('store.banner');
            Route::post('/samaira-group/banner/update/{group_banner}', 'updateBanner')->name('update.banner');
            Route::delete('/samaira-group/banner/delete/{group_banner}', 'destroyBanner')->name('delete.banner');

            Route::post('/samaira-group/concern/store', 'storeConcern')->name('store.concern');
            Route::post('/samaira-group/concern/update/{concern}', 'updateConcern')->name('update.concern');
            Route::delete('/samaira-group/concern/delete/{concern}', 'destroyConcern')->name('delete.concern');

            Route::post('/samaira-group/partner/store', 'storePartner')->name('store.partner');
            Route::post('/samaira-group/partner/update/{partner}', 'updatePartner')->name('update.partner');
            Route::delete('/samaira-group/partner/delete/{partner}', 'destroyPartner')->name('delete.partner');

            Route::post('/samaira-group/about/store', 'storeAbout')->name('store.about');
            Route::post('/samaira-group/about/update/{about}', 'updateAbout')->name('update.about');
            Route::delete('/samaira-group/about/delete/{about}', 'destroyAbout')->name('delete.about');

            Route::post('/samaira-group/count/store', 'storeCount')->name('store.count');

            Route::post('/samaira-group/news/store', 'storeNews')->name('store.news');
            Route::post('/samaira-group/news/update/{news}', 'updateNews')->name('update.news');
            Route::delete('/samaira-group/news/delete/{news}', 'deleteNews')->name('delete.news');

        });
        Route::group(['controller' => SamariaSkill::class, 'as' => 'group.'], function () {
            Route::get('/samairaskills', 'samairaSkill')->name('samairaskill');
            Route::post('/samaira-group/certified/store', 'storeCertified')->name('store.certified');
            Route::post('/samaira-group/certified/update/{certified}', 'updateCertified')->name('update.certified');
            Route::delete('/samaira-group/certified/delete/{certified}', 'destroyCertified')->name('delete.certified');
            Route::post('/samaira-group/advertise/store', 'storeAdvertise')->name('store.advertise');

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
            Route::get('/editional/all/trainers', 'trainer')->name('trainer');
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
            //contact info
            Route::post('/content/save/mission/info', 'storeMission')->name('save.mission');
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

            //gallary
            Route::post('/content/store/gallary', 'storeGallary')->name('store.gallary');
            Route::post('/content/update/gallary/{gallary}', 'updateGallary')->name('update.gallary');
            Route::delete('/content/delete/gallary/{gallary}', 'deleteGallary')->name('delete.gallary');

            //download
            Route::post('/content/store/download', 'storeDownload')->name('store.download');
            Route::delete('/content/delete/download/{download}', 'deleteDownload')->name('delete.download');

            //Privacy
            Route::post('/content/store/privacy', 'storePrivacy')->name('store.privacy');
            Route::post('/content/save/privacy/{privacy}', 'savePrivacy')->name('save.privacy');

            //chairman
            Route::post('/content/store/chairman', 'storeChairman')->name('store.chairman');
            Route::post('/content/store/chairman/image', 'storeChairmanImage')->name('store.chairman.image');

            //news
            Route::post('/content/store/news', 'storeNews')->name('store.news');
            Route::post('/content/update/news/{news}', 'updateNews')->name('update.news');
            Route::delete('/content/delete/news/{news}', 'deleteNews')->name('delete.news');
            //privecy
            Route::post('/content/privacy/update/image', 'updatePrivacyImage')->name('privacy.update.image');
            Route::post('/content/privacy/update/content', 'updatePrivacyContent')->name('privacy.update.content');


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
            Route::get('/about', 'about')->name('about');
            Route::get('/awards', 'awards')->name('awards');
            Route::get('/gallary', 'gallary')->name('gallary');
            Route::get('/downloads', 'downloads')->name('downloads');
            Route::get('/privacies', 'privacies')->name('privacies');
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
            Route::post('/samaira-medica-limited/update/product/best-selling/{product}', 'bestSelling')->name('product.bestselling');
            Route::delete('/samaira-medica-limited/delete/products/{product}', 'deleteProduct')->name('delete.product');

            Route::post('/samaira-medica-limited/store/images', 'storeImages')->name('store.images');
            Route::delete('/samaira-medica-limited/delete/images/{id}', 'deleteImage')->name('delete.images');


            Route::get('/samaira-medica-limited/orders', 'orders')->name('orders');
            Route::get('/samaira-medica-limited/order/{order}', 'order')->name('order');
            Route::post('/samaira-medica-limited/order/mark/{order}', 'updateMark')->name('order.mark');
        });
        Route::group(['controller' => GoldController::class, 'as' => 'group.'], function () {
            Route::get('/princess-gold-and-diamond-cottation', 'gold')->name('gold');
        });
        Route::group(['controller' => GoldController::class, 'as' => 'gold.'], function () {
            Route::post('/princess-gold-and-diamond-cottation/store/partner', 'storePartner')->name('store.partner');
            Route::delete('/princess-gold-and-diamond-cottation/delete/partner/{partner}', 'deletePartner')->name('delete.partner');

            Route::post('/princess-gold-and-diamond-cottation/store/service', 'storeService')->name('store.service');
            Route::post('/princess-gold-and-diamond-cottation/update/service/{service}', 'updateService')->name('update.service');
            Route::delete('/princess-gold-and-diamond-cottation/delete/service/{service}', 'deleteService')->name('delete.service');

            Route::post('/princess-gold-and-diamond-cottation/store/review', 'storeReview')->name('store.review');
            Route::post('/princess-gold-and-diamond-cottation/update/review/{review}', 'updateReview')->name('update.review');
            Route::delete('/princess-gold-and-diamond-cottation/delete/review/{review}', 'deleteReview')->name('delete.review');
        });
        Route::group(['controller' => JobController::class, 'as' => 'group.'], function () {
            Route::get('/samaira-jobs-bridge-limited', 'job')->name('job');
        });
        Route::group(['controller' => JobController::class, 'as' => 'job.'], function () {
            Route::post('/samaira-jobs-bridge-limited/store/partner', 'storePartner')->name('store.partner');
            Route::delete('/samaira-jobs-bridge-limited/delete/partner/{partner}', 'deletePartner')->name('delete.partner');

            Route::post('/samaira-jobs-bridge-limited/store/jobAbout', 'storeAbout')->name('store.jobAbout');
            Route::post('/samaira-jobs-bridge-limited/update/jobAbout/{jobAbout}', 'updateAbout')->name('update.jobAbout');
            Route::delete('/samaira-jobs-bridge-limited/delete/jobAbout/{jobAbout}', 'deleteAbout')->name('delete.jobAbout');

            Route::get('/samaira-jobs-bridge-limited/projects', 'jobProject')->name('project');
            Route::post('/samaira-jobs-bridge-limited/store/projects', 'storeProject')->name('store.project');
            Route::post('/samaira-jobs-bridge-limited/update/projects/{project}', 'updateProject')->name('update.project');
            Route::delete('/samaira-jobs-bridge-limited/delete/projects/{project}', 'deleteProject')->name('delete.project');

            Route::post('/samaira-jobs-bridge-limited/store/completed', 'storeCompleted')->name('store.completed');
            Route::get('/samaira-jobs-bridge-limited/edit/projects/{completed}', 'editCompleted')->name('edit.completed');
            Route::post('/samaira-jobs-bridge-limited/update/completed/{completed}', 'updateCompleted')->name('update.completed');
            Route::delete('/samaira-jobs-bridge-limited/delete/completed/{completed}', 'deleteCompleted')->name('delete.completed');

            Route::get('/samaira-jobs-bridge-limited/works', 'jobWork')->name('work');
            Route::get('/samaira-jobs-bridge-limited/works/list', 'jobWorks')->name('works');
            Route::get('/samaira-jobs-bridge-limited/works/applies', 'applies')->name('applies');
            Route::get('/samaira-jobs-bridge-limited/edit/work/{work}', 'editWork')->name('edit.work');
            Route::post('/samaira-jobs-bridge-limited/store/works', 'storeWork')->name('store.work');
            Route::post('/samaira-jobs-bridge-limited/update/works/{work}', 'updateWork')->name('update.work');
            Route::delete('/samaira-jobs-bridge-limited/delete/works/{work}', 'deleteWork')->name('delete.work');
            Route::delete('/samaira-jobs-bridge-limited/delete/apply/{apply}', 'deleteApply')->name('delete.apply');
            Route::post('/samaira-jobs-bridge-limited/apply/mark/{apply}', 'updateMark')->name('apply.mark');
        });
        Route::group(['controller' => AgroController::class, 'as' => 'group.'], function () {
            Route::get('/joypur-agro-limited', 'agro')->name('agro');
        });
        Route::group(['controller' => AgroController::class, 'as' => 'agro.'], function () {
            Route::post('/joypur-agro-limited/store/partner', 'storePartner')->name('store.partner');
            Route::delete('/joypur-agro-limited/delete/partner/{partner}', 'deletePartner')->name('delete.partner');

            Route::post('/joypur-agro-limited/store/agroAbout', 'storeAbout')->name('store.agroAbout');
            Route::post('/joypur-agro-limited/update/agroAbout/{agroAbout}', 'updateAbout')->name('update.agroAbout');
            Route::delete('/joypur-agro-limited/delete/agroAbout/{agroAbout}', 'deleteAbout')->name('delete.agroAbout');

            Route::post('/joypur-agro-limited/store/introduction', 'storeIntroduction')->name('store.introduction');
            Route::post('/joypur-agro-limited/update/introduction/{introduction}', 'updateIntroduction')->name('update.introduction');
            Route::delete('/joypur-agro-limited/delete/introduction/{introduction}', 'deleteIntroduction')->name('delete.introduction');

            Route::post('/joypur-agro-limited/store/benefit', 'storeBenefit')->name('store.benefit');
            Route::post('/joypur-agro-limited/update/benefit/{benefit}', 'updateBenefit')->name('update.benefit');
            Route::delete('/joypur-agro-limited/delete/benefit/{benefit}', 'deleteBenefit')->name('delete.benefit');

            Route::post('/joypur-agro-limited/store/project', 'storeProject')->name('store.project');
            Route::post('/joypur-agro-limited/update/project/{project}', 'updateProject')->name('update.project');
            Route::delete('/joypur-agro-limited/delete/project/{project}', 'deleteProject')->name('delete.project');
        });
        Route::group(['controller' => AviationController::class, 'as' => 'group.'], function () {
            Route::get('/samaira-aviation-limited', 'aviation')->name('aviation');
        });
        Route::group(['controller' => AviationController::class, 'as' => 'aviation.'], function () {
            Route::post('/samaira-aviation-limited/store/airline', 'storeAirline')->name('store.airline');
            Route::delete('/samaira-aviation-limited/delete/airline/{airline}', 'deleteAirline')->name('delete.airline');

            Route::get('/samaira-aviation-limited/destination', 'destination')->name('destination');
            Route::post('/samaira-aviation-limited/destination/store/from', 'storefrom')->name('store.from');
            Route::post('/samaira-aviation-limited/destination/update/from/{from}', 'updatefrom')->name('update.from');
            Route::delete('/samaira-aviation-limited/destination/delete/from/{from}', 'deletefrom')->name('delete.from');
            Route::post('/samaira-aviation-limited/destination/store/to', 'storeTo')->name('store.to');
            Route::post('/samaira-aviation-limited/destination/update/to/{to}', 'updateTo')->name('update.to');
            Route::delete('/samaira-aviation-limited/destination/delete/to/{to}', 'deleteTo')->name('delete.to');

            Route::get('/samaira-aviation-limited/requests', 'viewAviationRequest')->name('requests');

            Route::post('/samaira-aviation-limited/store/partner', 'storePartner')->name('store.partner');
            Route::delete('/samaira-aviation-limited/delete/partner/{partner}', 'deletePartner')->name('delete.partner');
        });
        Route::group(['controller' => EmergingController::class, 'as' => 'group.'], function () {
            Route::get('/emerging-office-supplies-limited', 'emerging')->name('emerging');
        });
        Route::group(['controller' => EmergingController::class, 'as' => 'emerging.'], function () {
            Route::get('/emerging-office-supplies-limited/categories', 'categories')->name('categories');
            Route::post('/emerging-office-supplies-limited/store/category', 'storeCategory')->name('store.category');
            Route::post('/emerging-office-supplies-limited/update/category/{category}', 'updateCategory')->name('update.category');
            Route::delete('/emerging-office-supplies-limited/delete/category/{category}', 'deleteCategory')->name('delete.category');

            Route::get('/emerging-office-supplies-limited/products', 'products')->name('products');
            Route::get('/emerging-office-supplies-limited/create/product', 'productCreate')->name('product.create');
            Route::get('/emerging-office-supplies-limited/edit/product/{product}', 'productEdit')->name('product.edit');
            Route::post('/emerging-office-supplies-limited/store/products', 'storeProduct')->name('store.product');
            Route::post('/emerging-office-supplies-limited/update/products/{product}', 'updateProduct')->name('update.product');
            Route::post('/emerging-office-supplies-limited/update/product/best-selling/{product}', 'bestSelling')->name('product.bestselling');
            Route::delete('/emerging-office-supplies-limited/delete/products/{product}', 'deleteProduct')->name('delete.product');

            Route::post('/emerging-office-supplies-limited/store/images', 'storeImages')->name('store.images');
            Route::delete('/emerging-office-supplies-limited/delete/images/{id}', 'deleteImage')->name('delete.images');

            Route::get('/emerging-office-supplies-limited/reviews', 'reviews')->name('reviews');
            Route::post('/emerging-office-supplies-limited/store/review', 'storeReview')->name('store.review');
            Route::post('/emerging-office-supplies-limited/update/review/{review}', 'updateReview')->name('update.review');
            Route::delete('/emerging-office-supplies-limited/delete/review/{review}', 'deleteReview')->name('delete.review');

            Route::post('/emerging-office-supplies-limited/store/partner', 'storePartner')->name('store.partner');
            Route::delete('/emerging-office-supplies-limited/delete/partner/{partner}', 'deletePartner')->name('delete.partner');

            Route::get('/emerging-office-supplies-limited/orders', 'orders')->name('orders');
            Route::get('/emerging-office-supplies-limited/order/{order}', 'order')->name('order');
            Route::post('/emerging-office-supplies-limited/order/mark/{order}', 'updateMark')->name('order.mark');
        });

        Route::group(['controller' => RaisaController::class, 'as' => 'group.'], function () {
            Route::get('/raisa-trade-international', 'raisa')->name('raisa');
        });
        Route::group(['controller' => RaisaController::class, 'as' => 'raisa.'], function () {
            Route::post('/raisa-trade-international/store/partner', 'storePartner')->name('store.partner');
            Route::delete('/raisa-trade-international/delete/partner/{partner}', 'deletePartner')->name('delete.partner');

            Route::post('/raisa-trade-international/store/service', 'storeService')->name('store.service');
            Route::post('/raisa-trade-international/update/service/{service}', 'updateService')->name('update.service');
            Route::delete('/raisa-trade-international/delete/service/{service}', 'deleteService')->name('delete.service');

            Route::post('/raisa-trade-international/store/review', 'storeReview')->name('store.review');
            Route::post('/raisa-trade-international/update/review/{review}', 'updateReview')->name('update.review');
            Route::delete('/raisa-trade-international/delete/review/{review}', 'deleteReview')->name('delete.review');
        });
        Route::group(['controller' => SpsController::class, 'as' => 'group.'], function () {
            Route::get('/sps-filling-station', 'sps')->name('sps');
        });
        Route::group(['controller' => SpsController::class, 'as' => 'sps.'], function () {

            Route::get('/sps-filling-station/service', 'Service')->name('service');
            Route::post('/sps-filling-station/store/service', 'storeService')->name('store.service');
            Route::post('/sps-filling-station/update/service/{service}', 'updateService')->name('update.service');
            Route::delete('/sps-filling-station/delete/service/{service}', 'deleteService')->name('delete.service');

            Route::get('/sps-filling-station/review', 'Review')->name('review');
            Route::post('/sps-filling-station/store/review', 'storeReview')->name('store.review');
            Route::post('/sps-filling-station/update/review/{review}', 'updateReview')->name('update.review');
            Route::delete('/sps-filling-station/delete/review/{review}', 'deleteReview')->name('delete.review');

            Route::get('/sps-filling-station/choose', 'Choose')->name('choose');
            Route::post('/sps-filling-station/store/choose', 'storeChoose')->name('store.choose');
            Route::post('/sps-filling-station/update/choose/{choose}', 'updateChoose')->name('update.choose');
            Route::delete('/sps-filling-station/delete/choose/{choose}', 'deleteChoose')->name('delete.choose');
        });



    });
