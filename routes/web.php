<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WishController;
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

Route::get('/', [IndexController::class, 'indexPage'])->name('indexPage');

Route::get('/projects', [ProjectController::class, 'getProjects'])->name('getProjects');
Route::get('/projects{id}', [ProjectController::class, 'getProjectById'])->name('getProjectById');

Route::get('/wishlist', [WishController::class, 'getWishlist'])->name('getWishlist');


