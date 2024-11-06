<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WritersController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/aboutUs', [AboutUsController::class, 'about'])->name('about');

Route::get('/category', [CategoryController::class, 'category'])->name('category');

Route::get('/writers', [WritersController::class, 'writer'])->name('writer');
