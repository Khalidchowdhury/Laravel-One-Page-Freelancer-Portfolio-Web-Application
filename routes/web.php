<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;



// Website Home Page Route
Route::get('/', [ FrontendController::class, 'HomePage' ]) -> name('home.page');



// Admin Panel Route
Route::get('/cPanel', [ AdminController::class, 'adminPanel' ]) -> name('admin.page');

Route::get('/home-section', [ AdminController::class, 'homeSection' ]) -> name('home.section');