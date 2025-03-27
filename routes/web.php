<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{slug}/{id}', [CategoryController::class, 'index'])->name('category.product');
Route::get('/cars', [CarController::class, 'index'])->name('car');
Route::get('/cars/{id}', [CarController::class, 'show'])->name('car.detail');
Route::get('/newcategory/{slug}/{id}', [NewsCategoryController::class, 'index'])->name('newcategory.blog');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('new.detail');