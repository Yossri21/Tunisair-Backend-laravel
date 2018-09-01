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
    Route::Post('requestclient', 'RequestclientController@store');
    Route::Post('addPartnaire' , 'RequestPartnaireController@store');
    Route::Post('update/{id}' , 'TravelController@update');
    Route::Post('travel' , 'TravelController@store');
    Route::Get('user' , 'UserController@index');
    Route::Get('request', 'RequestclientController@index');
    Route::Get('listtravel','TravelController@index');
    Route::Get('get/{id}','TravelController@show');



});