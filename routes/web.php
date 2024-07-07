<?php

use App\Http\Controllers\Admin\CarritoController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\TestimonioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Nueva ruta para el carrito con el controlador CarritoController
Route::get('/carrito', [CarritoController::class, 'index'])->middleware('auth')->name('carrito');

Route::resource('clientes', ClienteController::class)->only(['index', 'store', 'update', 'destroy'])->names([
    'index' => 'clientes.index',
    'store' => 'clientes.store',
    'update' => 'clientes.update',
    'destroy' => 'clientes.destroy'
]);

Route::get('/nosotros', function () {
    return view('nosotros');
})->middleware(['auth', 'verified'])->name('nosotros');

Route::resource('testimonio', TestimonioController::class)->only(['index', 'store', 'update', 'destroy'])->names([
    'index' => 'testimonio.index',
    'store' => 'testimonio.store',
    'update' => 'testimonio.update',
    'destroy' => 'testimonio.destroy'
]);

require __DIR__.'/auth.php';
