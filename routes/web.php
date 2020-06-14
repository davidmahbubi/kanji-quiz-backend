<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin'], function() {

    Route::get('/', function () {
        return view('dashboard.index');
    });
    
    Route::get('admin/soal', function() {
        return view('soal.index');
    });
    
    Route::get('admin/soal/{question}/edit', function() {
        return view('soal.edit');
    });
    
    Route::get('admin/level/', function() {
        return view('level.index');
    });
    
    Route::get('admin/level/{level}/edit', function() {
        return view('level.edit');
    });

});

Route::group(['middleware' => 'guest:admin,user'], function() {
    Route::group(['prefix' => 'admin/auth/login'], function() {
        Route::get('', 'Auth\LoginController@index')->name('login');
        Route::post('', 'Auth\LoginController@postLogin');
    });
});

Route::get('admin/auth/logout', 'Auth\LogoutController@logout')->name('logout');
