<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin'], function() {

    Route::get('/', function () {
        return view('dashboard.index');
    });

    Route::group(['prefix' => 'admin'], function() {

        Route::group(['prefix' => 'soal'], function() {

            Route::get('', function() {
                return view('soal.index');
            });
            
            Route::get('{question}/edit', function() {
                return view('soal.edit');
            });

        });

        Route::group(['prefix' => 'level'], function() {
            Route::get('', 'Level\LevelController@index')->name('levelIndex');
            Route::put('', 'Level\LevelController@store');
            Route::patch('{level}', 'Level\LevelController@update');
            Route::get('{level}/edit', 'Level\LevelController@edit')->name('levelEdit');
            Route::get('{level}/delete', 'Level\LevelController@destroy');
        });
        
    });
    

});

Route::group(['middleware' => 'guest:admin,user'], function() {
    Route::group(['prefix' => 'admin/auth/login'], function() {
        Route::get('', 'Auth\LoginController@index')->name('login');
        Route::post('', 'Auth\LoginController@postLogin');
    });
});

Route::get('admin/auth/logout', 'Auth\LogoutController@logout')->name('logout');
