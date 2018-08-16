<?php

use Illuminate\Http\Request;

Route::group([

    'middleware' => 'api',

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::Post('sendPasswordResetLink','ResetPasswordController@sendEmail');
    Route::Post('resetPassword','ChangePasswordController@process');
    Route::Get('user' , 'UserController@index');
});