<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/form', function () {
    return view('auth.form');
});

Route::get('/datatemuan', function () {
    return view('auth.datatemuan');
});

Route::get('/detail', function () {
    return view('auth.detail');
});
