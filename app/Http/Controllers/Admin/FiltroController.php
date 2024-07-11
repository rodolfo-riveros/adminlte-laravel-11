<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FiltroController extends Controller
{
    public function filterByCategory($categoryId = null)
    {
        if ($categoryId && $categoryId != 'all') {
            $productos = Product::where('category_id', $categoryId)->get();
        } else {
            $productos = Product::all();
        }

        return response()->json($productos);
    }
}
