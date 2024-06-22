<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::resource('home', HomeController::class)->only(['index', 'edit', 'update'])->names('admin.home');
