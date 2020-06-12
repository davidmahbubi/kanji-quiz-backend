<?php

use Illuminate\Support\Facades\Route;

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

Route::get('admin/level/', function() {
    return view('level.index');
});

Route::get('admin/level/{level}/edit', function() {
    return view('level.edit');
});
