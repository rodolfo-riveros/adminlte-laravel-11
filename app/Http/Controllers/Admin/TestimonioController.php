<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonio;
use Illuminate\Http\Request;

class TestimonioController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'testimonio' => 'required|string|max:255',
        ]);

        $testimonios = new Testimonio();
        $testimonios->user_id = $validatedData['user_id'];
        $testimonios->testimonio = $validatedData['testimonio'];
        $testimonios->save();

        if ($testimonios) {
            return redirect()->route('nosotros')->with('success', 'El testimonio fue registrado correctamente.');
        } else {
            return redirect()->back()->withErrors('No se registró correctamente el testimonio.');
        }
    }

    public function showTestimonials()
    {
        // Obtener todos los testimonios con la información del usuario que los escribió
        $testimonios = Testimonio::with('user')->get();

        return view('nosotros', compact('testimonios'));
    }
}
