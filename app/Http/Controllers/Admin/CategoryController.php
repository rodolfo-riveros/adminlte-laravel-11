<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categoria.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'color' => 'required',
        ]);

        try {
            $validator->validate();

            $category = new Category();
            $category->name = $request->name;
            $category->description = $request->description;
            $category->color = $request->color;

            $category->save();

            if ($category) {
                return redirect()->route('admin.categoria.index')->with('success', 'La categoria fue registrada correctamente.');
            } else {
                return back()->withErrors(['general' => 'Ocurrió un error al crear la categoría.']);
            }
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors());
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'color' => 'required',
        ]);

        try {
            $validator->validate();

            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->description = $request->description;
            $category->color = $request->color;

            $category->save();

            if ($category) {
                return redirect()->route('admin.categoria.index')->with('success', 'La categoria fue actualizada correctamente.');
            } else {
                return back()->withErrors(['general' => 'Ocurrió un error al actualizar la categoría.']);
            }
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors());
        }
    }

    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->route('admin.categoria.index')->with('success', 'La categoria fue eliminado correctamente.');
    }
}
