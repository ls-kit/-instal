<?php

use App\Http\Controllers\frontend\FrontendController;
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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/category', [FrontendController::class, 'category'])->name('category');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/profile', [FrontendController::class, 'profile'])->name('profile');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/signup', [FrontendController::class, 'signup'])->name('signup');
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/revolving', [FrontendController::class, 'revolving'])->name('revolving');


