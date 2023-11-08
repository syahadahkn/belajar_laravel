<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [HomeController::class,'home']);

Route::get('/about', [HomeController::class,'about']);

Route::get('contact', [HomeController::class, 'contact']);

Route::get('saya', [HomeController::class, 'index']);
