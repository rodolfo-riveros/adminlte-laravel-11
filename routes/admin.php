<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MostarPedidoController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\UserController;

Route::resource('home', HomeController::class)->only(['index', 'edit', 'update'])->names('admin.home');
Route::resource('usuario', UserController::class)->only(['index', 'store', 'update', 'destroy'])->names('admin.usuario');
Route::resource('categoria', CategoryController::class)->only(['index', 'store', 'update', 'destroy'])->names('admin.categoria');
Route::resource('producto', ProductoController::class)->only(['index', 'store', 'update', 'destroy'])->names('admin.producto');
Route::resource('pedido', MostarPedidoController::class)->only(['index', 'update', 'destroy'])->names('admin.pedido');
