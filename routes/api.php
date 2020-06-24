<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v' . env('API_VERSION', 1), 'middleware' => 'allow.cors'], function() {

    Route::group(['prefix' => 'auth'], function() {
        Route::post('login', 'Auth\LoginController@postLogin');
        Route::post('register', 'Auth\RegisterController@postRegister');
    });

    // Protected routes
    Route::group(['middleware' => 'auth:user'], function() {

        Route::get('auth/check', 'Auth\LoginController@checkLoggedUser');

        Route::group(['prefix' => 'question'], function() {
            
            Route::get('{question}', 'Question\QuestionController@show');

            Route::group(['prefix' => 'list'], function() {
                
                Route::get('{level}', 'Question\QuestionController@index');

            });
            
        });

        Route::group(['prefix' => 'level'], function() {
            Route::get('', 'Level\LevelController@index');
        });

    });
});
