<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('admin/auth/login', function() {
    return view('auth.login');
});

Route::get('admin/soal', function() {
    return view('soal.index');
});

Route::get('admin/soal/{question}/edit', function() {
    return view('soal.edit');
});