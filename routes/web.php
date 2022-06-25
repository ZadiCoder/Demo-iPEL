<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Catrgory;
Route::get('/home',[BaseController::class,'home'])->name('home');
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');