<div class="flex flex-col md:flex-row gap-4 p-4">
    <div class="flex-1 space-y-4">
        <div class="w-full bg-gray-800 p-4 rounded-lg shadow-lg">
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pedidos.store') }}" method="POST" class="px-4 py-8 sm:px-6 lg:px-8">
                <h3 class="text-white font-semibold text-xl mb-8">Datos personales</h3>
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label
                            class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="name">
                            Nombre
                        </label>
                        <input
                            class="flex h-10 w-full rounded-md border border-input bg-gray-800 text-white px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-lime-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            id="name" placeholder="Introduce tu nombre" name="name"
                            value="{{ $user->name }}" />
                    </div>
                    <div class="space-y-2">
                        <label
                            class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="email">
                            Correo electrónico
                        </label>
                        <input
                            class="flex h-10 w-full rounded-md border border-input bg-gray-800 text-white px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-lime-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            id="email" placeholder="Introduce tu correo electrónico" name="email" type="email"
                            value="{{ $user->email }}" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6 pt-4">
                    <div class="space-y-2">
                        <label
                            class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="phone">
                            Número de celular
                        </label>
                        <input
                            class="flex h-10 w-full rounded-md border border-input bg-gray-800 text-white px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-lime-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            id="phone" placeholder="Ingrese su número de celular" name="phone" type="tel" />
                    </div>
                    <div class="space-y-2">
                        <label
                            class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="address">
                            Dirección
                        </label>
                        <input
                            class="flex h-10 w-full rounded-md border border-input bg-gray-800 text-white px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-lime-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            id="address" placeholder="Dirección" name="address" type="text" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6 pt-4">
                    <div class="space-y-2">
                        <label
                            class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="city">
                            Ciudad
                        </label>
                        <input
                            class="flex h-10 w-full rounded-md border border-input bg-gray-800 text-white px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-lime-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            id="city" placeholder="Ciudad" name="city" />
                    </div>
                    <div class="space-y-2">
                        <label
                            class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="state">
                            Departamento
                        </label>
                        <input
                            class="flex h-10 w-full rounded-md border border-input bg-gray-800 text-white px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-lime-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            id="state" placeholder="Departamento" name="state" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6 pt-4 pb-10">
                    <div class="space-y-2">
                        <label
                            class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="zip">
                            Código postal
                        </label>
                        <input
                            class="flex h-10 w-full rounded-md border border-input bg-gray-800 text-white px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-lime-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            id="zip" placeholder="Código postal" name="zip" />
                    </div>
                </div>
                <div class="w-full h-1 bg-lime-500 rounded mt-4 mb-4"></div>
                <div class="w-full">
                    <div class="bg-gray-800 py-10" aria-modal="true" role="dialog" tabindex="-1">
                        <h3 class="text-white font-semibold text-xl mb-8">Productos seleccionados</h3>
                        <div class="mt-4 space-y-6">
                            @foreach ($productos as $product)
                                <ul class="space-y-4">
                                    <li class="flex items-center gap-4">
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                            class="size-16 rounded object-cover" />
                                        <div>
                                            <h3 class="text-base text-white font-bold">{{ $product->name }}</h3>
                                            <dl class="mt-0.5 space-y-px text-[10px] text-gray-600">
                                                <div>
                                                    <dt class="inline text-white/90 text-xs">
                                                        {{ Str::limit($product->description, 100) }}
                                                    </dt>
                                                </div>
                                                <div>
                                                    <dt class="inline text-white/90 text-xs">Categoria:</dt>
                                                    <dd class="inline text-white/80 text-xs">
                                                        {{ $product->category->name }}</dd>
                                                </div>
                                                <div>
                                                    <dt class="inline text-white/90 text-xs">Precio:</dt>
                                                    <dd class="inline text-lime-500 text-xs">{{ $product->precio }}
                                                    </dd>
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="flex flex-1 items-center justify-end gap-2">
                                            <div>
                                                <label for="cantidad_{{ $product->id }}"
                                                    class="sr-only">Cantidad</label>
                                                <input type="hidden" name="product_ids[]" value="{{ $product->id }}">
                                                <input type="number" min="1" value="1" name="cantidades[]"
                                                    id="cantidad_{{ $product->id }}"
                                                    class="h-8 w-12 rounded border-gray-200 bg-gray-50 p-0 text-center text-xs text-gray-600 [-moz-appearance:_textfield] focus:outline-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />
                                            </div>
                                            <button @click.prevent="removeFromCart({{ $product->id }})"
                                                class="text-gray-600 transition hover:text-red-600">
                                                <span class="sr-only">Remove item</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-7 w-7">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                            <div class="space-y-4 text-center">
                                <button type="submit"
                                    class="block rounded-full w-full bg-lime-500 px-5 py-3 text-sm text-gray-100 transition hover:bg-lime-600">
                                    Checkout
                                </button>
                                <a href="/"
                                    class="inline-block text-sm text-lime-500 underline underline-offset-4 transition hover:text-lime-600">
                                    Seguir comprando
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="w-full md:w-1/3 space-y-4">
        <div class="p-4 bg-gray-100 dark:bg-gray-800 rounded-md shadow">
            <h3 class="text-lg font-semibold text-white">Resumen de pedido</h3>
            <div class="mt-4 space-y-4">
                @php
                    $total = 0;
                @endphp

                @foreach ($pedidos as $pedido)
                    <div class="flex justify-between">
                        <span class="text-white/80">{{ $pedido->product->name }}</span>
                        <span class="text-white/80">PEN {{ $pedido->product->precio }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-white/80">Cantidad:</span>
                        <span class="text-lime-500">{{ $pedido->cantidad }}</span>
                    </div>
                    @php
                        $subtotal = $pedido->product->precio * $pedido->cantidad;
                        $total += $subtotal;
                    @endphp
                    <div class="flex justify-between">
                        <span class="text-white/80">Subtotal:</span>
                        <span class="text-red-600">PEN {{ $subtotal }}</span>
                    </div>
                    <hr class="border-t border-gray-300">
                @endforeach

                <div class="flex justify-between font-bold text-white">
                    <span>Total a pagar:</span>
                    <span class="text-lime-500">PEN {{ $total }}</span>
                </div>
                <button id="pagarBtn" target="_blank"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-full text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 w-full mt-4 bg-lime-500 text-white"
                    onclick="downloadPdf()">
                    Pagar
                </button>
            </div>
        </div>

        <div class="p-4 bg-gray-100 dark:bg-gray-800 rounded-md shadow">
            <h3 class="text-lg font-semibold text-white">Paga con</h3>
            <div class="flex flex-wrap justify-center items-center mt-2 space-x-2">
                <button
                    class="bg-white p-3 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-lime-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                        class="h-8 w-8 text-lime-500 fill-current">
                        <path
                            d="M470.1 231.3s7.6 37.2 9.3 45H446c3.3-8.9 16-43.5 16-43.5-.2 .3 3.3-9.1 5.3-14.9l2.8 13.4zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM152.5 331.2L215.7 176h-42.5l-39.3 106-4.3-21.5-14-71.4c-2.3-9.9-9.4-12.7-18.2-13.1H32.7l-.7 3.1c15.8 4 29.9 9.8 42.2 17.1l35.8 135h42.5zm94.4 .2L272.1 176h-40.2l-25.1 155.4h40.1zm139.9-50.8c.2-17.7-10.6-31.2-33.7-42.3-14.1-7.1-22.7-11.9-22.7-19.2 .2-6.6 7.3-13.4 23.1-13.4 13.1-.3 22.7 2.8 29.9 5.9l3.6 1.7 5.5-33.6c-7.9-3.1-20.5-6.6-36-6.6-39.7 0-67.6 21.2-67.8 51.4-.3 22.3 20 34.7 35.2 42.2 15.5 7.6 20.8 12.6 20.8 19.3-.2 10.4-12.6 15.2-24.1 15.2-16 0-24.6-2.5-37.7-8.3l-5.3-2.5-5.6 34.9c9.4 4.3 26.8 8.1 44.8 8.3 42.2 .1 69.7-20.8 70-53zM528 331.4L495.6 176h-31.1c-9.6 0-16.9 2.8-21 12.9l-59.7 142.5H426s6.9-19.2 8.4-23.3H486c1.2 5.5 4.8 23.3 4.8 23.3H528z" />
                    </svg>
                </button>
                <button
                    class="bg-white p-3 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-lime-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                        class="h-8 w-8 text-lime-500 fill-current">
                        <path
                            d="M482.9 410.3c0 6.8-4.6 11.7-11.2 11.7-6.8 0-11.2-5.2-11.2-11.7 0-6.5 4.4-11.7 11.2-11.7 6.6 0 11.2 5.2 11.2 11.7zm-310.8-11.7c-7.1 0-11.2 5.2-11.2 11.7 0 6.5 4.1 11.7 11.2 11.7 6.5 0 10.9-4.9 10.9-11.7-.1-6.5-4.4-11.7-10.9-11.7zm117.5-.3c-5.4 0-8.7 3.5-9.5 8.7h19.1c-.9-5.7-4.4-8.7-9.6-8.7zm107.8 .3c-6.8 0-10.9 5.2-10.9 11.7 0 6.5 4.1 11.7 10.9 11.7 6.8 0 11.2-4.9 11.2-11.7 0-6.5-4.4-11.7-11.2-11.7zm105.9 26.1c0 .3 .3 .5 .3 1.1 0 .3-.3 .5-.3 1.1-.3 .3-.3 .5-.5 .8-.3 .3-.5 .5-1.1 .5-.3 .3-.5 .3-1.1 .3-.3 0-.5 0-1.1-.3-.3 0-.5-.3-.8-.5-.3-.3-.5-.5-.5-.8-.3-.5-.3-.8-.3-1.1 0-.5 0-.8 .3-1.1 0-.5 .3-.8 .5-1.1 .3-.3 .5-.3 .8-.5 .5-.3 .8-.3 1.1-.3 .5 0 .8 0 1.1 .3 .5 .3 .8 .3 1.1 .5s.2 .6 .5 1.1zm-2.2 1.4c.5 0 .5-.3 .8-.3 .3-.3 .3-.5 .3-.8 0-.3 0-.5-.3-.8-.3 0-.5-.3-1.1-.3h-1.6v3.5h.8V426h.3l1.1 1.4h.8l-1.1-1.3zM576 81v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V81c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM64 220.6c0 76.5 62.1 138.5 138.5 138.5 27.2 0 53.9-8.2 76.5-23.1-72.9-59.3-72.4-171.2 0-230.5-22.6-15-49.3-23.1-76.5-23.1-76.4-.1-138.5 62-138.5 138.2zm224 108.8c70.5-55 70.2-162.2 0-217.5-70.2 55.3-70.5 162.6 0 217.5zm-142.3 76.3c0-8.7-5.7-14.4-14.7-14.7-4.6 0-9.5 1.4-12.8 6.5-2.4-4.1-6.5-6.5-12.2-6.5-3.8 0-7.6 1.4-10.6 5.4V392h-8.2v36.7h8.2c0-18.9-2.5-30.2 9-30.2 10.2 0 8.2 10.2 8.2 30.2h7.9c0-18.3-2.5-30.2 9-30.2 10.2 0 8.2 10 8.2 30.2h8.2v-23zm44.9-13.7h-7.9v4.4c-2.7-3.3-6.5-5.4-11.7-5.4-10.3 0-18.2 8.2-18.2 19.3 0 11.2 7.9 19.3 18.2 19.3 5.2 0 9-1.9 11.7-5.4v4.6h7.9V392zm40.5 25.6c0-15-22.9-8.2-22.9-15.2 0-5.7 11.9-4.8 18.5-1.1l3.3-6.5c-9.4-6.1-30.2-6-30.2 8.2 0 14.3 22.9 8.3 22.9 15 0 6.3-13.5 5.8-20.7 .8l-3.5 6.3c11.2 7.6 32.6 6 32.6-7.5zm35.4 9.3l-2.2-6.8c-3.8 2.1-12.2 4.4-12.2-4.1v-16.6h13.1V392h-13.1v-11.2h-8.2V392h-7.6v7.3h7.6V416c0 17.6 17.3 14.4 22.6 10.9zm13.3-13.4h27.5c0-16.2-7.4-22.6-17.4-22.6-10.6 0-18.2 7.9-18.2 19.3 0 20.5 22.6 23.9 33.8 14.2l-3.8-6c-7.8 6.4-19.6 5.8-21.9-4.9zm59.1-21.5c-4.6-2-11.6-1.8-15.2 4.4V392h-8.2v36.7h8.2V408c0-11.6 9.5-10.1 12.8-8.4l2.4-7.6zm10.6 18.3c0-11.4 11.6-15.1 20.7-8.4l3.8-6.5c-11.6-9.1-32.7-4.1-32.7 15 0 19.8 22.4 23.8 32.7 15l-3.8-6.5c-9.2 6.5-20.7 2.6-20.7-8.6zm66.7-18.3H408v4.4c-8.3-11-29.9-4.8-29.9 13.9 0 19.2 22.4 24.7 29.9 13.9v4.6h8.2V392zm33.7 0c-2.4-1.2-11-2.9-15.2 4.4V392h-7.9v36.7h7.9V408c0-11 9-10.3 12.8-8.4l2.4-7.6zm40.3-14.9h-7.9v19.3c-8.2-10.9-29.9-5.1-29.9 13.9 0 19.4 22.5 24.6 29.9 13.9v4.6h7.9v-51.7zm7.6-75.1v4.6h.8V302h1.9v-.8h-4.6v.8h1.9zm6.6 123.8c0-.5 0-1.1-.3-1.6-.3-.3-.5-.8-.8-1.1-.3-.3-.8-.5-1.1-.8-.5 0-1.1-.3-1.6-.3-.3 0-.8 .3-1.4 .3-.5 .3-.8 .5-1.1 .8-.5 .3-.8 .8-.8 1.1-.3 .5-.3 1.1-.3 1.6 0 .3 0 .8 .3 1.4 0 .3 .3 .8 .8 1.1 .3 .3 .5 .5 1.1 .8 .5 .3 1.1 .3 1.4 .3 .5 0 1.1 0 1.6-.3 .3-.3 .8-.5 1.1-.8 .3-.3 .5-.8 .8-1.1 .3-.6 .3-1.1 .3-1.4zm3.2-124.7h-1.4l-1.6 3.5-1.6-3.5h-1.4v5.4h.8v-4.1l1.6 3.5h1.1l1.4-3.5v4.1h1.1v-5.4zm4.4-80.5c0-76.2-62.1-138.3-138.5-138.3-27.2 0-53.9 8.2-76.5 23.1 72.1 59.3 73.2 171.5 0 230.5 22.6 15 49.5 23.1 76.5 23.1 76.4 .1 138.5-61.9 138.5-138.4z" />
                    </svg>
                </button>
                <button
                    class="bg-white p-3 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-lime-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                        class="h-8 w-8 text-lime-500 fill-current">
                        <path
                            d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z" />
                    </svg>
                </button>
                <button
                    class="bg-white p-3 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-lime-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                        class="h-8 w-8 text-lime-500 fill-current">
                        <path
                            d="M105.7 215v41.3h57.1a49.7 49.7 0 0 1 -21.1 32.6c-9.5 6.6-21.7 10.3-36 10.3-27.6 0-50.9-18.9-59.3-44.2a65.6 65.6 0 0 1 0-41l0 0c8.4-25.5 31.7-44.4 59.3-44.4a56.4 56.4 0 0 1 40.5 16.1L176.5 155a101.2 101.2 0 0 0 -70.8-27.8 105.6 105.6 0 0 0 -94.4 59.1 107.6 107.6 0 0 0 0 96.2v.2a105.4 105.4 0 0 0 94.4 59c28.5 0 52.6-9.5 70-25.9 20-18.6 31.4-46.2 31.4-78.9A133.8 133.8 0 0 0 205.4 215zm389.4-4c-10.1-9.4-23.9-14.1-41.4-14.1-22.5 0-39.3 8.3-50.5 24.9l20.9 13.3q11.5-17 31.3-17a34.1 34.1 0 0 1 22.8 8.8A28.1 28.1 0 0 1 487.8 248v5.5c-9.1-5.1-20.6-7.8-34.6-7.8-16.4 0-29.7 3.9-39.5 11.8s-14.8 18.3-14.8 31.6a39.7 39.7 0 0 0 13.9 31.3c9.3 8.3 21 12.5 34.8 12.5 16.3 0 29.2-7.3 39-21.9h1v17.7h22.6V250C510.3 233.5 505.3 220.3 495.1 211zM475.9 300.3a37.3 37.3 0 0 1 -26.6 11.2A28.6 28.6 0 0 1 431 305.2a19.4 19.4 0 0 1 -7.8-15.6c0-7 3.2-12.8 9.5-17.4s14.5-7 24.1-7C470 265 480.3 268 487.6 273.9 487.6 284.1 483.7 292.9 475.9 300.3zm-93.7-142A55.7 55.7 0 0 0 341.7 142H279.1V328.7H302.7V253.1h39c16 0 29.5-5.4 40.5-15.9 .9-.9 1.8-1.8 2.7-2.7A54.5 54.5 0 0 0 382.3 158.3zm-16.6 62.2a30.7 30.7 0 0 1 -23.3 9.7H302.7V165h39.6a32 32 0 0 1 22.6 9.2A33.2 33.2 0 0 1 365.7 220.5zM614.3 201 577.8 292.7h-.5L539.9 201H514.2L566 320.6l-29.4 64.3H561L640 201z" />
                    </svg>
                </button>
                <button
                    class="bg-white p-3 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-lime-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                        class="h-8 w-8 text-lime-500 fill-current">
                        <path
                            d="M116.9 158.5c-7.5 8.9-19.5 15.9-31.5 14.9-1.5-12 4.4-24.8 11.3-32.6 7.5-9.1 20.6-15.6 31.3-16.1 1.2 12.4-3.7 24.7-11.1 33.8m10.9 17.2c-17.4-1-32.3 9.9-40.5 9.9-8.4 0-21-9.4-34.8-9.1-17.9 .3-34.5 10.4-43.6 26.5-18.8 32.3-4.9 80 13.3 106.3 8.9 13 19.5 27.3 33.5 26.8 13.3-.5 18.5-8.6 34.5-8.6 16.1 0 20.8 8.6 34.8 8.4 14.5-.3 23.6-13 32.5-26 10.1-14.8 14.3-29.1 14.5-29.9-.3-.3-28-10.9-28.3-42.9-.3-26.8 21.9-39.5 22.9-40.3-12.5-18.6-32-20.6-38.8-21.1m100.4-36.2v194.9h30.3v-66.6h41.9c38.3 0 65.1-26.3 65.1-64.3s-26.4-64-64.1-64h-73.2zm30.3 25.5h34.9c26.3 0 41.3 14 41.3 38.6s-15 38.8-41.4 38.8h-34.8V165zm162.2 170.9c19 0 36.6-9.6 44.6-24.9h.6v23.4h28v-97c0-28.1-22.5-46.3-57.1-46.3-32.1 0-55.9 18.4-56.8 43.6h27.3c2.3-12 13.4-19.9 28.6-19.9 18.5 0 28.9 8.6 28.9 24.5v10.8l-37.8 2.3c-35.1 2.1-54.1 16.5-54.1 41.5 .1 25.2 19.7 42 47.8 42zm8.2-23.1c-16.1 0-26.4-7.8-26.4-19.6 0-12.3 9.9-19.4 28.8-20.5l33.6-2.1v11c0 18.2-15.5 31.2-36 31.2zm102.5 74.6c29.5 0 43.4-11.3 55.5-45.4L640 193h-30.8l-35.6 115.1h-.6L537.4 193h-31.6L557 334.9l-2.8 8.6c-4.6 14.6-12.1 20.3-25.5 20.3-2.4 0-7-.3-8.9-.5v23.4c1.8 .4 9.3 .7 11.6 .7z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="p-4 bg-gray-100 dark:bg-gray-800 rounded-md shadow">
            <h3 class="text-lg font-semibold text-white">Protección del comprador</h3>
            <div class="flex items-start mt-2 space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="text-lime-500">
                    <path
                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                </svg>
                <p class="text-sm text-white/90">
                    Recibe un reembolso de tu dinero si el artículo no llega o es diferente al de la descripción.
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    function mostrarNotificacionExito() {
        // Crea el elemento de notificación
        var toast = document.createElement('div');
        toast.id = 'notificacionExito';
        toast.className = 'bg-green-500 text-white p-4 rounded mb-4 fixed top-0 start-1/2 transform -translate-x-1/2';

        // Establece el contenido de la notificación
        toast.textContent = 'Pago realizado exitosamente!';

        // Agrega el elemento al cuerpo del documento
        document.body.appendChild(toast);

        // Oculta la notificación después de 3 segundos
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 3000);
    }

    // Selecciona el botón y agrega el listener de clic
    var btnPagar = document.getElementById('pagarBtn');
    btnPagar.addEventListener('click', function() {
        // Aquí puedes poner el código para procesar el pago
        // Después de que el pago haya sido procesado exitosamente, llama a la función para mostrar la notificación
        mostrarNotificacionExito();
    });
</script>
<script>
    function downloadPdf() {
        window.open("{{ route('generate.pdf') }}", "_blank");
    }
</script>
