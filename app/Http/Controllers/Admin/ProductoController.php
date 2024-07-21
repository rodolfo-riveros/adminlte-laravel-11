<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProductoController extends Controller
{
    public function index()
    {
        return view('admin.producto.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image',
            'manual' => 'nullable|file|mimes:pdf',
        ]);

        try {
            $validator->validate();

            $producto = new Product();
            $producto->category_id = $request->category_id;
            $producto->name = $request->name;
            $producto->description = $request->description;
            $producto->precio = $request->precio;
            $producto->stock = $request->stock;

            if ($request->hasFile('image')) {
                $imageFile = $request->file('image');
                $imagePath = $imageFile->store('images', 'public');
                $producto->image = $imagePath;
            }

            if ($request->hasFile('manual')) {
                $manualFile = $request->file('manual');
                $manualPath = $manualFile->store('manuals', 'public');
                $producto->manual = $manualPath;
            }

            $producto->save();

            if ($producto) {
                return redirect()->route('admin.producto.index')->with('success', 'El producto fue registrado correctamente.');
            } else {
                return back()->withErrors(['general' => 'Ocurrió un error al crear el producto.']);
            }
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors());
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image',
            'manual' => 'nullable|file|mimes:pdf',
        ]);

        try {
            $validator->validate();

            $producto = Product::findOrFail($id);
            $producto->category_id = $request->category_id;
            $producto->name = $request->name;
            $producto->description = $request->description;
            $producto->precio = $request->precio;
            $producto->stock = $request->stock;

            if ($request->hasFile('image')) {
                $imageFile = $request->file('image');
                $imagePath = $imageFile->store('images', 'public');
                $producto->image = $imagePath;
            }

            if ($request->hasFile('manual')) {
                $manualFile = $request->file('manual');
                $manualPath = $manualFile->store('manuals', 'public');
                $producto->manual = $manualPath;
            }

            $producto->save();

            if ($producto) {
                return redirect()->route('admin.producto.index')->with('success', 'El producto fue actualizada correctamente.');
            } else {
                return back()->withErrors(['general' => 'Ocurrió un error al actualizar el producto.']);
            }
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors());
        }
    }

    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('admin.producto.index')->with('success', 'El producto fue eliminado correctamente.');
    }
}
