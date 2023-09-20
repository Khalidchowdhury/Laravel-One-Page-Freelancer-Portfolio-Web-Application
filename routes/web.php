<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;



// Website Home Page Route
Route::get('/', [ FrontendController::class, 'HomePage' ]) -> name('home.page');



// Admin Panel Route
Route::get('/cPanel', [ AdminController::class, 'adminPanel' ]) -> name('cPanel');

Route::get('/home', [ AdminController::class, 'homeSection' ]) -> name('home');

Route::get('/about', [ AdminController::class, 'aboutSection' ]) -> name('about');

Route::get('/contact', [ AdminController::class, 'contactSection' ]) -> name('contact');










