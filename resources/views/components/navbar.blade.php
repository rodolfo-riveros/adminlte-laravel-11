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
                            <a class="text-white transition hover:text-lime-500" href="{{ route('pedido') }}"> Mis pedidos </a>
                        </li>
                        <li>
                            <a class="text-white transition hover:text-lime-500" href="{{ route('servicio') }}"> Servicios </a>
                        </li>
                        <li>
                            <a class="text-white transition hover:text-lime-500" href="{{ route('nosotros') }}"> Nosotros </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4 ml-3">
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                @if (auth()->user()->hasRole('Administrador'))
                                    <a class="rounded-md bg-lime-500 px-5 py-2.5 text-base font-medium text-white shadow" href="{{ url('/admin/home') }}">
                                        Panel
                                    </a>
                                @else
                                    <!-- Settings Dropdown -->
                                    <div x-data="{ open: false }" class="relative hidden sm:flex sm:items-center sm:ms-6">
                                        <button @click="open = ! open" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ Auth::user()->name }}</div>
                                            <div class="ms-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 01-1.414 0l-4-4a1 1 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>

                                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </div>
                                    </div>
                                @endif
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

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
