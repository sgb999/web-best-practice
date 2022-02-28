<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
Route::inertia('/', 'Home');
Route::inertia('/about', 'About');
Route::inertia('/contact-us', 'ContactUs');
Route::post('/contact-us', [ContactController::class, 'contactForm']);

