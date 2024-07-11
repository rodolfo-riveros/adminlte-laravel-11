<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BuscarController extends Controller
{
    public function index()
    {
        $productos = Product::all();
        $categories = Category::all();
        return view('index', compact('productos', 'categories'));
    }

    public function buscarProductos(Request $request)
    {
        $query = $request->input('buscar');
        $productos = Product::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'LIKE', "%{$query}%");
        })->get();
        $categories = Category::all();

        return view('index', compact('productos', 'categories'));
    }
}
