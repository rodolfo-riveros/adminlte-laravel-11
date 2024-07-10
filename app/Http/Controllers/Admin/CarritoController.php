<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index(Request $request)
    {
        // Asegúrate de que los IDs de los productos se están pasando correctamente
        $productIds = json_decode($request->query('product_ids', '[]'), true);

        // Verifica que los product_ids no estén vacíos
        if(empty($productIds)) {
            return view('carrito', [
                'productos' => collect([]), // No hay productos seleccionados
                'categories' => Category::all(),
                'user' => Auth::user()
            ]);
        }

        // Obtén los productos por sus IDs
        $productos = Product::whereIn('id', $productIds)->get();
        $categories = Category::all();
        $user = Auth::user();

        return view('carrito', compact('productos', 'categories', 'user'));
    }
}
