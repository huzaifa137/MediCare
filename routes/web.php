<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'userDashboard'])->name('user.dashboard');


Route::controller(UserController::class)->prefix('user')->group(function () {

    Route::get('login', 'userLogin')->name('user.login');
    Route::get('profile', 'userProfile')->name('user.profile');

});