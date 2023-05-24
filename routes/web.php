<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookDetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherDetController;

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
    return view('Layout\main');
});

Route::get('/contact', [ContactController::class, 'showContact'] )->name("contact");
Route::get('/home', [HomeController::class, 'showHome'] )->name("home");
Route::get('/bookDet', [BookDetController::class, 'showBookDet'] )->name("bD");
Route::get('/category', [CategoryController::class, 'showCategory'] )->name("category");
Route::get('/publisherDet', [PublisherDetController::class, 'showPublisherDet'] )->name("pD");
//Route::get('/home', [HomeController::class, 'showHome'] )->name("home");
