<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v' . env('API_VERSION', 1)], function() {

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

        Route::group(['prefix' => 'quiz'], function() {
            Route::post('submit_quiz', 'Quiz\QuizController@postSubmit');
        });

        Route::group(['prefix' => 'user'], function() {
            Route::patch('update', 'User\UserController@massUpdate');
            Route::patch('update/password', 'User\UserController@passwordUpdate');
            Route::post('update/picture', 'User\UserController@pictureUpdate');
            Route::patch('update/{field}', 'User\UserController@singleUpdate');
        });

    });
});
