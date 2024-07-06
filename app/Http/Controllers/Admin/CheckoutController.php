<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $productos = \App\Models\Product::whereIn('id', array_keys($request->quantities))->get();
        $total = 0;

        foreach ($productos as $producto) {
            $total += $producto->precio * $request->quantities[$producto->id];
        }

        $user = Auth::user();
        $productos = Product::all();
        $categories = Category::all();

        return view('carrito', compact('productos', 'total', 'request', 'user', 'productos', 'categories'));
    }
}
