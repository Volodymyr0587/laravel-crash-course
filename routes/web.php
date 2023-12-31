<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, 'index']);
Route::get('/category/{slug}', [BlogController::class, 'getPostsByCategory'])->name('getPostsByCategory');

Route::get('/category/{slug_category}/{slug_post}', [BlogController::class, 'getPost'])->name('getPost');
