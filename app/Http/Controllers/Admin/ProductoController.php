<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return view('admin.producto.index');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        $producto = new Product();
        $producto->category_id = $validateData['category_id'];
        $producto->name = $validateData['name'];
        $producto->description = $validateData['description'];
        $producto->precio = $validateData['precio'];
        $producto->stock = $validateData['stock'];
        $producto->stock = $validateData['stock'];

        $producto->save();

        if ($producto) {
            return redirect()->route('admin.producto.index')->with('success', 'El producto fue registrado correctamente.');
        } else {
            return redirect()->back()->withErrors('No se registró correctamente el producto.');
        }
    }

    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        $producto = Product::findOrFail($id);
        $producto->category_id = $validateData['category_id'];
        $producto->name = $validateData['name'];
        $producto->description = $validateData['description'];
        $producto->precio = $validateData['precio'];
        $producto->stock = $validateData['stock'];
        $producto->stock = $validateData['image'];
        $producto->stock = $validateData['manual'];

        $producto->save();

        if ($producto){
            return redirect()->route('admin.producto.index')->with('success', 'El producto fue actualizada correctamente.');
        }else {
            return redirect()->back()->withErrors('No se actualizo correctamente el producto.'. $producto->getMessage());
        }
    }

    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('admin.producto.index')->with('success', 'El producto fue eliminado correctamente.');
    }
}
