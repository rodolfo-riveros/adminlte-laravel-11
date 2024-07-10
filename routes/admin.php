<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MostarPedidoController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\UserController;

Route::resource('home', HomeController::class)->only(['index', 'edit', 'update'])->names('admin.home')->middleware('can:admin.home.index');
Route::resource('usuario', UserController::class)->only(['index', 'store', 'update', 'destroy'])->names('admin.usuario')->middleware('can:admin.usuario.index');
Route::resource('categoria', CategoryController::class)->only(['index', 'store', 'update', 'destroy'])->names('admin.categoria')->middleware('can:admin.categoria.index');
Route::resource('producto', ProductoController::class)->only(['index', 'store', 'update', 'destroy'])->names('admin.producto')->middleware('can:admin.producto.index');
Route::resource('pedido', MostarPedidoController::class)->only(['index', 'update', 'destroy'])->names('admin.pedido')->middleware('can:admin.pedido.index');
