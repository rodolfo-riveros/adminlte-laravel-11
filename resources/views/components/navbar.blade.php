<header class="bg-gray-100 dark:bg-gray-900">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
                <a class="block text-lime-500" href="#">
                    <span class="sr-only">Home</span>
                    <img src="{{ asset('vendor/adminlte/dist/img/XSTATION.png') }}" alt="Logo-xstation" width="15%">
                </a>
            </div>

            <div class="hidden md:block">
                <nav aria-label="Global">
                    <ul class="flex items-center gap-6 text-base">
                        <li>
                            <a class="text-white transition hover:text-lime-500" href="/"> Productos </a>
                        </li>
                        <li>
                            <a class="text-white transition hover:text-lime-500" href="#"> Mis pedidos </a>
                        </li>
                        <li>
                            <a class="text-white transition hover:text-lime-500" href="{{ route('carrito') }}"> Carrito </a>
                        </li>
                        <li>
                            <a class="text-white transition hover:text-lime-500" href="#"> Servicios </a>
                        </li>
                        <li>
                            <a class="text-white transition hover:text-lime-500" href="#"> Nosotros </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4 ml-3">
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a class="rounded-md bg-lime-500 px-5 py-2.5 text-base font-medium text-white shadow" href="{{ url('/admin/home') }}" >
                                    Panel
                                </a>
                            @else
                                <a class="rounded-md bg-lime-500 px-5 py-2.5 text-base font-medium text-white shadow" href="{{ route('login') }}">
                                    Iniciar
                                </a>
                                @if (Route::has('register'))
                                    <div class="hidden sm:flex ml-2">
                                        <a class="rounded-md bg-gray-100 px-5 py-2.5 text-base font-medium text-lime-500" href="{{ route('register') }}">
                                            Registrarse
                                        </a>
                                    </div>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
                <div class="block md:hidden">
                    <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
