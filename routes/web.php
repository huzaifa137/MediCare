<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\DeliveryController;

Route::controller(AdminController::class)->group(function () {

    Route::group(['middleware' => ['AdminAuth']], function () {

        Route::get('patients-dashboard', 'patientsDashboard')->name('patients.dashboard');
        Route::get('doctors-dashboard', 'doctorsDashboard')->name('doctors.dashboard');
        Route::get('pharmacies-dashboard', 'pharmaciesDashboard')->name('pharmacies.dashboard');
        Route::get('delivery-dashboard', 'deliveryDashboard')->name('delivery.dashboard');

        Route::group(['prefix' => '/users'], function () {

            Route::get('dashboard', 'adminDashboard')->name('user.dashboard');
            Route::get('login', 'userLogin')->name('user.login');
            Route::get('profile', 'userProfile')->name('user.profile');
            Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');

            Route::get('add-admin', 'addAdmin')->name('add.admin');
            Route::get('all-admins', 'allAdmins')->name('all.admins');

        });

        // Route::get('/', 'userLogin')->name('user.login');
        Route::get('/', 'index')->name('index');
        Route::get('/user-logout', 'userLogout')->name('user.logout');
        Route::get('/admin/{admin}/edit', 'editAdmin')->name('admin.edit');
        Route::get('/password/reset/{id}', 'createNewPassword')->name('password/reset');

        Route::delete('/admin/{id}', 'destroy')->name('admin.destroy');

        Route::put('/admin/{admin}', 'updateAdmin')->name('admin.update');
        Route::post('/store-admin', 'storeAdmin')->name('admin.store');
        Route::post('/admin/{id}/change-status', 'changeStatus')->name('admin.changeStatus');
        Route::post('/admin/change-password', 'changePassword')->name('admin.change.password');


    });


    Route::get('/clear-session', 'flushSession');
    Route::get('/reset-password-access-link', 'userLogin')->name('reset-password-access-link');
    Route::post('user-store-new-password', 'store_new_password')->name('user-store-new-password');
    Route::post('auth-user-check', 'checkUser')->name('auth-user-check');
    Route::post('user-generate-forgot-password-link', 'generateForgotPasswordLink')->name('user-generate-forgot-password-link');


    Route::controller(SiteController::class)->group(function () {

        Route::get('/index', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/pricing', 'pricing')->name('pricing');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/services', 'services')->name('services');
        Route::get('/doctors', 'doctors')->name('doctor');
        Route::get('/doctor-details', 'doctorDetails')->name('blog-details');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('pharmacies', 'pharmacies')->name('pharmacies');
        Route::get('pharmacies-products', 'pharmaciesProducts')->name('pharmacies.products');


        Route::get('/doctor-details-1', 'doctorDetails1')->name('blog-details-1');
        Route::get('/doctor-details-2', 'doctorDetails2')->name('blog-details-2');
        Route::get('/doctor-details-3', 'doctorDetails3')->name('blog-details-3');

        Route::get('/specific-service/{serviceName}/', 'specificService1')->name('specific-service-1');
        Route::get('/specific-service-doctors/{serviceName}/', 'specificServiceDoctors')->name('specific-service-doctors');

    });
});


Route::controller(DoctorsController::class)->group(function () {

    Route::group(['middleware' => ['AdminAuth']], function () {

        Route::group(['prefix' => '/pharmacy'], function () {
            Route::get('checkout-list', 'pharmachyCheckoutList')->name('pharmacy.checkout-list');
            Route::get('products-list', 'productsList')->name('pharmacy.products-list');
            Route::get('pharmacy-list', 'pharmacyLists')->name('pharmacy.pharmacy-list');
        });
    });

    Route::group(['prefix' => '/doctors'], function () {

        Route::get('register', 'registerDoctors')->name('doctors.register');
        Route::get('manage-doctors', 'manageDoctors')->name('doctors.manage');
        Route::get('all-registered-doctors', 'allRegisteredDoctors')->name('all.registered.doctors');

        Route::post('store-new-doctor', 'storeNewDoctor')->name('doctors.store');

    });

    Route::group(['prefix' => '/patients'], function () {

        Route::get('register', 'registerPatients')->name('patients.register');
        Route::get('manage-patients', 'managePatients')->name('patients.manage');

        Route::post('store-new-patient', 'storeNewPatient')->name('patients.store');
    });


    Route::group(['prefix' => '/pharmacy'], function () {

        Route::get('add-pharmacy', 'addPharmacy')->name('add.pharmacy');
        Route::get('manage-pharmacies', 'managePharmacies')->name('pharmacies.manage');

        Route::post('store-new-pharmacy', 'storeNewPharmacy')->name('pharmacy.store');
    });

    Route::group(['prefix' => '/web-ui'], function () {

        Route::get('services', 'webUIServices')->name('webui.services');
        Route::delete('/service/{id}', 'deleteServices')->name('service.delete');
        Route::post('store-services', 'storeServices')->name('services.store');
        Route::post('/service/{id}/subcategory', 'addSubCategory')->name('service.addSubCategory');
    });

    Route::get('/services/{service}', 'getService')->name('services.get');
    Route::post('/services/update/{service}', 'updateService')->name('services.update');

});


Route::controller(ChatController::class)->group(function () {

    Route::group(['middleware' => ['AdminAuth']], function () {

        Route::get('/chat/updates', 'getUpdates');
        Route::get('/chat/{conversation}/messages', 'getMessages');
        Route::get('chatroom', 'chatroom')->name('chat.chatroom');
        Route::get('/chat/{conversation}', 'show')->name('chat.show');
        Route::post('/chat/{conversation}/send', 'store')->name('chat.send');
        Route::post('/chat/start/{doctorId}', 'startConversation')->name('chat.start');
        Route::post('/chat/send-first-message', 'sendFirstMessage');
        Route::post('/chat/{conversation}/mark-read', 'markRead')->name('chat.markRead');
        Route::get('/user/{user}/status', function (User $user) {
            return response()->json(['online' => $user->isOnline()]);
        });

        Route::post('/chat/{conversation}/start-video-call', 'startVideoCall');
        Route::post('/chat/video-call-signal', 'sendVideoCallSignal');

    });
});


Route::controller(DeliveryController::class)->group(function () {

    Route::group(['prefix' => '/delivery'], function () {
        Route::get('enroll-personnel', 'EnrollPersonnel')->name('enroll.personnel');
        Route::post('store-new-delivery-personnel', 'storeDeliveryPersonnel')->name('delivery.store');
    });

});