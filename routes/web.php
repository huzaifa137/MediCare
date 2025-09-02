<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::controller(AdminController::class)->group(function () {



    Route::group(['middleware' => ['AdminAuth']], function () {

        Route::group(['prefix' => '/users'], function () {

            Route::get('dashboard', 'userDashboard')->name('user.dashboard');
            Route::get('login', 'userLogin')->name('user.login');
            Route::get('profile', 'userProfile')->name('user.profile');

        });

        Route::get('/', 'userLogin')->name('user.login');
    });

    Route::post('auth-user-check', 'checkUser')->name('auth-user-check');

});
