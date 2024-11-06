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
    return view('/pages/home');
});

Route::get('/category', function () {
    return view('/pages/category');
});

Route::get('/aboutUs', function () {
    return view('/pages/about');
});

Route::get('/writers', function() {
    return view('/pages/writers');
});