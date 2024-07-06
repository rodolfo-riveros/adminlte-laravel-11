<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:10',
        ]);

        $cliente = new Cliente();
        $cliente->user_id = $validatedData['user_id'];
        $cliente->name = $validatedData['name'];
        $cliente->email = $validatedData['email'];
        $cliente->phone = $validatedData['phone'];
        $cliente->address = $validatedData['address'];
        $cliente->city = $validatedData['city'];
        $cliente->state = $validatedData['state'];
        $cliente->zip = $validatedData['zip'];
        $cliente->save();

        if ($cliente) {
            return redirect()->route('carrito')->with('success', 'El cliente fue registrado correctamente.');
        } else {
            return redirect()->back()->withErrors('No se registró correctamente el cliente.');
        }
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
