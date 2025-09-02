<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::controller(AdminController::class)->group(function () {



    Route::group(['middleware' => ['AdminAuth']], function () {

        Route::group(['prefix' => '/users'], function () {

            Route::get('dashboard', 'adminDashboard')->name('user.dashboard');
            Route::get('login', 'userLogin')->name('user.login');
            Route::get('profile', 'userProfile')->name('user.profile');
            Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');


            Route::get('add-admin', 'addAdmin')->name('add.admin');
            Route::get('all-admins', 'addAdmins')->name('all.admins');

        });

        Route::get('/', 'userLogin')->name('user.login');
        Route::get('/user-logout', 'userLogout')->name('user.logout');
        Route::get('/admin/{admin}/edit', 'editAdmin')->name('admin.edit');


        Route::delete('/admin/{id}', 'destroy')->name('admin.destroy');

        Route::put('/admin/{admin}', 'updateAdmin')->name('admin.update');
        Route::post('/store-admin', 'storeAdmin')->name('admin.store');
        Route::post('/admin/{id}/change-status', 'changeStatus')->name('admin.changeStatus');
        Route::post('/admin/change-password', 'changePassword')->name('admin.change.password');


    });

    Route::get('/clear-session', 'flushSession');
    Route::get('password/reset/{id}', 'createNewPassword')->name('password/reset');
    Route::post('user-store-new-password', 'store_new_password')->name('user-store-new-password');
    Route::post('auth-user-check', 'checkUser')->name('auth-user-check');
    Route::post('user-generate-forgot-password-link', 'generateForgotPasswordLink')->name('user-generate-forgot-password-link');


});
