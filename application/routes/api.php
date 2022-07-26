<?php

use App\Http\Controllers\ {
    AuthController,
    VacancyController,
    ResponseController,
    UserLikeController,
    VacancyLikeController
};

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function($router) {
    Route::controller(AuthController::class)
        ->group(function () {
            Route::post('/register', 'register');
            Route::post('/login', 'login');
            Route::post('/logout', 'logout');
            Route::post('/refresh', 'refresh');
            Route::post('/profile', 'profile');
        });

    Route::resource('vacancy', VacancyController::class);
    Route::resource('response', ResponseController::class);
    Route::resource('user-like', UserLikeController::class);
    Route::resource('vacacny-like', VacancyLikeController::class);
});
