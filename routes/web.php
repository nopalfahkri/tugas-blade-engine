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

Route::get('/Home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');
Route::get('/About', [App\Http\Controllers\AboutController::class, 'index'])->name('About');
Route::get('/Contact', [App\Http\Controllers\ContactController::class, 'index'])->name('Contact');
