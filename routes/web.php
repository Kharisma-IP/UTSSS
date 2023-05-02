<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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

Route::get('/home', [BookController::class, 'getAllBook'])->name('home');
Route
::get('/detail', [BookController::class, 'getBookById'])->name('detail');
Route::get('/publisher',[PublisherController::class, 'getAllPublisher'])->name('publisher');
Route::get('/publisher/detail',[PublisherController::class, 'getPublisherbyId'])->name('publisher_detail');
Route::get('/category',[CategoryController::class, 'getBookbyCategory'])->name('category');

