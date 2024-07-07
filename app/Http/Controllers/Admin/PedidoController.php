<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
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
            'cantidades' => 'required|array',
            'cantidades.*' => 'integer|min:1',
            'product_ids' => 'required|array',
            'product_ids.*' => 'integer|exists:products,id',
        ]);

        try {
            foreach ($request->cantidades as $index => $cantidad) {
                $pedido = new Pedido();
                $pedido->user_id = $validatedData['user_id'];
                $pedido->name = $validatedData['name'];
                $pedido->email = $validatedData['email'];
                $pedido->phone = $validatedData['phone'];
                $pedido->address = $validatedData['address'];
                $pedido->city = $validatedData['city'];
                $pedido->state = $validatedData['state'];
                $pedido->zip = $validatedData['zip'];
                $pedido->product_id = $request->product_ids[$index];
                $pedido->cantidad = $cantidad;
                $pedido->save();
            }

            return redirect()->route('carrito')->with('success', 'Pedido realizado con éxito.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Error al procesar el pedido.']);
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
