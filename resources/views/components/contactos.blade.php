<div class="px-4 py-4 mx-auto max-w-7xl">
    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
        <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-normal text-white md:text-6xl md:tracking-tight">
            Experiencia<span
                class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-lime-500 to-purple-500 lg:inline">
                de Nuestros Clientes
            </span>
        </h1>
        <p class="px-0 mb-6 text-lg text-white md:text-xl lg:px-24">
            En Xstation, somos líderes en la venta de
            consolas y equipos de alta tecnología.
            Ofrecemos una amplia variedad de productos, desde las últimas consolas de videojuegos hasta
            portátiles de última generación.
            Nuestro compromiso con la calidad, el asesoramiento experto y el envío rápido nos distingue.
            ¡Explora el futuro tecnológico
            en Xstation!
        </p>
    </div>
    <div class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400 relative overflow-hidden">
                            <img src="/vendor/adminlte/dist/img/rodri.jpg" alt="Rodri"
                                class="absolute inset-0 w-full h-full object-contain">
                        </div>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium title-font mt-4 text-white text-lg">Rodrigo Riveros Mitma</h2>
                            <div class="w-12 h-1 bg-lime-500 rounded mt-2 mb-4"></div>
                            <p class="text-base text-white/80">Apasionado por la innovación, fundó XSTATION, la tienda
                                virtual líder en consolas y equipos de alta tecnología.</p>
                        </div>
                    </div>
                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-lime-500 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <div class="max-w-md w-full space-y-8 p-5 bg-gray-800 rounded-xl shadow-lg z-10">
                            <div class="grid gap-8 grid-cols-1">
                                <div class="flex flex-col">
                                    <div class="mt-5">
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
                                        <form action="{{ route('testimonio.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <div class="form">
                                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                                    <label class="font-semibold text-white py-2"
                                                        for="testimonio">Testimonio</label>
                                                    <textarea required name="testimonio" id="testimonio"
                                                        class="min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg py-4 px-4 bg-gray-800 text-white/80 focus-visible:ring-lime-500"
                                                        placeholder="Comparte tu experiencia aquí" spellcheck="false"></textarea>
                                                </div>
                                                <div
                                                    class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                                    <button type="submit"
                                                        class="mb-2 md:mb-0 bg-lime-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-lime-700">
                                                        Enviar
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    @foreach ($testimonios as $testimonio)
                        <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                            <div class="h-full text-center">
                                <img alt="imagen random"
                                    class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                                    src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim($testimonio->user->email))) }}?d=identicon">
                                <p class="leading-relaxed text-white/80">{{ $testimonio->testimonio }}</p>
                                <span class="inline-block h-1 w-10 rounded bg-lime-500 mt-6 mb-4"></span>
                                <h2 class="text-white font-medium title-font tracking-wider text-sm">
                                    {{ $testimonio->user->name }}</h2>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
