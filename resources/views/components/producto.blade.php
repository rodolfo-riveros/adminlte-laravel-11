<!-- Incluye Alpine.js -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div x-data="{ modelOpen: false, dataModal: '' }">
    <form id="search-form" action="{{ route('productos.buscar') }}" method="POST" class="py-5 w-1/2">
        @csrf
        <div class="flex items-center">
            <input type="text" name="buscar"
                class="w-full px-4 py-2 mr-2 text-white bg-gray-800 border border-gray-800 rounded-md focus:outline-none focus:ring-lime-500 focus:border-lime-500"
                placeholder="Buscar producto...">
            <button type="submit"
                class="flex items-center justify-center px-4 py-2 text-white bg-lime-500 rounded-md hover:bg-lime-600 focus:outline-none focus:bg-lime-600">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" class="text-white fill-current">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </button>
        </div>
    </form>
    <div id="product-list"
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($productos as $producto)
        <div class="bg-card p-4 rounded-lg shadow-md bg-slate-800 product-item">
            <img @click="modelOpen =!modelOpen; dataModal={{ $producto->id }}"
                src="{{ Storage::url($producto->image) }}" alt="{{ $producto->name }}"
                class="w-full h-48 object-cover rounded-lg mb-4 cursor-pointer"
                onclick="mostrarModal({{ $producto->id }})" />
            <h3 @click="modelOpen =!modelOpen; dataModal={{ $producto->id }}"
                class="text-lg font-bold mb-2 text-white cursor-pointer"
                onclick="mostrarModal({{ $producto->id }})">{{ $producto->name }}</h3>
            <p class="text-muted-foreground mb-4 text-white/90">{{ Str::limit($producto->description, 100) }}</p>
            <div class="flex items-center justify-between">
                <span class="text-primary font-bold text-lg text-lime-500">S/.{{ $producto->precio }}</span>
                <a @click="agregarAlCarrito({{ $producto->id }})"
                    class="group inline-block rounded-full bg-gradient-to-r from-teal-500 via-green-500 to-lime-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75"
                    href="{{ route('carrito', ['product_ids' => json_encode([$producto->id])]) }}">
                    <span
                        class="block rounded-full bg-white px-8 py-3 text-sm font-medium group-hover:bg-transparent">
                        Agregar al carrito
                    </span>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    @foreach ($productos as $producto)
        <div x-show="dataModal=={{ $producto->id }}" class="fixed inset-0 z-50 overflow-y-auto"
            aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false; dataModal='' " x-show="modelOpen"
                    x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-400 bg-opacity-40" aria-hidden="true"></div>

                <div x-cloak x-show="modelOpen" x-cloak x-show="modelOpen"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full max-w-4xl p-8 my-20 overflow-hidden text-left transition-all transform rounded-lg shadow-xl bg-gray-100 dark:bg-gray-800">
                    <div class="flex items-center justify-between space-x-4 mb-4">
                        <h1 class="text-xl font-medium text-white">Detalles de producto</h1>
                        <button @click="modelOpen = false; dataModal='' "
                            class="text-lime-500 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container mx-auto">
                            <div class="flex flex-wrap">
                                <img alt="ecommerce"
                                    class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                                    src="{{ Storage::url($producto->image) }}">
                                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                                    <h2 class="text-sm title-font text-white/90 tracking-widest">BRAND NAME</h2>
                                    <h1 class="text-white text-3xl title-font font-medium mb-1">{{ $producto->name }}
                                    </h1>
                                    <div class="flex mb-4">
                                        <span class="flex items-center">
                                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-lime-500"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                </path>
                                            </svg>
                                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-lime-500"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                </path>
                                            </svg>
                                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-lime-500"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                </path>
                                            </svg>
                                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                class="w-4 h-4 text-lime-500" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                </path>
                                            </svg>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                class="w-4 h-4 text-lime-500" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                </path>
                                            </svg>
                                            <span class="text-white/80 ml-3">4 reseñas</span>
                                        </span>
                                        <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                                            <a class="text-white/80">
                                                <svg fill="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-white/80">
                                                <svg fill="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-white/80">
                                                <svg fill="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                    <p class="leading-relaxed text-white/80">
                                        {{ Str::limit($producto->description, 200) }}</p>
                                    <div
                                        class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5 justify-between">
                                        <div class="flex">
                                            <span class="mr-3 text-white/80">Color</span>
                                            <button
                                                class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                                            <button
                                                class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                                            <button
                                                class="border-2 border-gray-300 ml-1 bg-lime-500 rounded-full w-6 h-6 focus:outline-none"></button>
                                        </div>
                                        <div class="flex">
                                            <span class="mr-3 text-white/80">Manual</span>
                                            <a href="{{ Storage::url($producto->manual) }}" target="_blank"
                                                rel="noopener noreferrer">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    fill="currentColor" class="fill-current w-6 h-6 text-lime-500">>
                                                    <path
                                                        d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <span class="title-font font-medium text-2xl text-lime-500">S/.
                                            {{ $producto->precio }}</span>
                                        <a @click="agregarAlCarrito({{ $producto->id }})"
                                            class="flex ml-auto text-white bg-lime-500 border-0 py-2 px-6 focus:outline-none hover:bg-lime-600 rounded"
                                            href="{{ route('carrito', ['product_ids' => json_encode([$producto->id])]) }}">Agregar
                                            al carrito</a>
                                        <button
                                            class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{-- <script>
    function agregarAlCarrito(productId) {
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        if (!carrito.includes(productId)) {
            carrito.push(productId);
        }
        localStorage.setItem('carrito', JSON.stringify(carrito));

        // Redirigir a la vista de pago
        let carritoUrl = '{{ route('carrito') }}' + '?product_ids=' + JSON.stringify(carrito);
        window.location.href = carritoUrl;
    }
</script> --}}
