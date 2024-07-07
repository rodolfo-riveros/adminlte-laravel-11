<div class="rounded-lg border bg-gray-800 text-white shadow-sm" data-v0-t="card">
    <div class="flex flex-col space-y-1.5 p-6 px-7">
        <h1
            class="py-6 text-4xl font-extrabold leading-none tracking-normal text-white md:text-6xl md:tracking-tight">
            Pedidos <span
                class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-lime-500 to-purple-500 lg:inline">recientes de tu tienda</span>
            XSTATION
        </h1>
    </div>
    <div class="p-6">
        <div class="relative w-full overflow-auto">
            <table class="w-full caption-bottom text-sm text-white">
                <thead class="border-b border-gray-700">
                    <tr class="border-b transition-colors hover:bg-gray-700 data-[state=selected]:bg-gray-600">
                        <th class="h-12 px-4 text-left align-middle font-medium text-gray-300">Pedido</th>
                        <th class="h-12 px-4 text-left align-middle font-medium text-gray-300 hidden sm:table-cell">
                            Fecha</th>
                        <th class="h-12 px-4 text-left align-middle font-medium text-gray-300">Producto</th>
                        <th class="h-12 px-4 text-left align-middle font-medium text-gray-300">Cantidad</th>
                        <th class="h-12 px-4 text-left align-middle font-medium text-gray-300">Precio unitario</th>
                        <th class="h-12 px-4 text-left align-middle font-medium text-gray-300">Precio total</th>
                    </tr>
                </thead>
                <tbody class="[&amp;_tr:last-child]:border-0">
                    @foreach ($pedidos as $pedido)
                        <tr class="border-b transition-colors hover:bg-gray-700 data-[state=selected]:bg-gray-600">
                            <td class="p-4 align-middle font-medium">{{ $pedido->id }}</td>
                            <td class="p-4 align-middle hidden sm:table-cell">
                                {{ $pedido->created_at->format('d \d\e F, Y') }}</td>
                            <td class="p-4 align-middle">{{ $pedido->product->name }}</td>
                            <td class="p-4 align-middle">{{ $pedido->cantidad }}</td>
                            <td class="p-4 align-middle">S/.{{ $pedido->product->precio }}</td>
                            <td class="p-4 align-middle">S/.{{ $pedido->cantidad * $pedido->product->precio }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
