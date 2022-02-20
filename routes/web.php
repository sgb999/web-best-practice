<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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
Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'home');
    Route::get('/about', 'about');
    Route::get('/contact-us', 'contactUs');
    Route::post('/contact-us', 'contactForm');
});

