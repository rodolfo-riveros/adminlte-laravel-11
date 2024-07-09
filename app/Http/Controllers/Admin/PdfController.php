<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $ultimoPedido = Pedido::with(['product', 'user'])->latest()->first();

        if (!$ultimoPedido) {
            return redirect()->back()->with('error', 'No hay pedidos disponibles.');
        }

        $data = [
            'title' => 'Factura de Compra',
            'date' => date('m/d/Y'),
            'pedido' => $ultimoPedido,
            'user' => $ultimoPedido->user,
        ];

        $pdf = Pdf::loadView('pdf.invoice', $data);

        return $pdf->stream('comprobante_de_pago.pdf');
    }
}
