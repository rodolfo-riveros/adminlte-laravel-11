<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;

class MostarPedidoController extends Controller
{
    public function index()
    {
        return view('admin.pedido.index');
    }

    public function destroy(string $id)
    {
        Pedido::find($id)->delete();
        return redirect()->route('admin.pedido.index')->with('success', 'El pedido fue eliminado correctamente.');
    }
}
