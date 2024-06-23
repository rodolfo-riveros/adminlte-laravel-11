<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::resource('home', HomeController::class)->only(['index', 'edit', 'update'])->names('admin.home');
Route::resource('categoria', CategoryController::class)->only(['index', 'store', 'update', 'destroy'])->names('admin.categoria');
