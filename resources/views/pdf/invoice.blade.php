<!DOCTYPE html>
<html>
<head>
    <title>Factura de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            padding: 20px;
            background-color: #f7fafc;
            border-radius: 5px;
        }
        h3 {
            background-color: #4a5568;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }
        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .total {
            font-weight: bold;
            font-size: 1.2em;
        }
        .text-lime {
            color: #84cc16;
        }
        .text-red {
            color: #f56565;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.8em;
            color: #718096;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Resumen de pedido</h3>
        <p>Fecha: {{ $date }}</p>
        <h4>Datos del Cliente</h4>
        <p>Nombre: {{ $user->name }}</p>
        <p>Correo Electrónico: {{ $user->email }}</p>
        <p>Teléfono: {{ $pedido->phone }}</p>
        <p>Dirección: {{ $pedido->address }}</p>
        <p>Ciudad: {{ $pedido->city }}</p>
        <p>Departamento: {{ $pedido->state }}</p>
        <p>Código Postal: {{ $pedido->zip }}</p>

        <h4>Detalles del Pedido</h4>
        <div class="item">
            <span>{{ $pedido->product->name }}</span>
            <span>PEN {{ $pedido->product->precio }}</span>
        </div>
        <div class="item">
            <span>Cantidad:</span>
            <span class="text-lime">{{ $pedido->cantidad }}</span>
        </div>
        @php
            $subtotal = $pedido->product->precio * $pedido->cantidad;
        @endphp
        <div class="item">
            <span>Subtotal:</span>
            <span class="text-red">PEN {{ $subtotal }}</span>
        </div>
        <hr>

        <div class="item total">
            <span>Total a pagar:</span>
            <span class="text-lime">PEN {{ $subtotal }}</span>
        </div>
    </div>
    <div class="footer">
        Factura generada por la tienda virtual XSTATION
    </div>
</body>
</html>
