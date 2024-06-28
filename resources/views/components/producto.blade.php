<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($productos as $producto)
        <div class="bg-card p-4 rounded-lg shadow-md bg-slate-800">
            <img src="{{ Storage::url($producto->image) }}" alt="{{ $producto->name }}" width="400" height="300" style="aspect-ratio: 400 / 300; object-fit: cover;" class="w-full h-48 object-cover rounded-lg mb-4"/>
            <h3 class="text-lg font-bold mb-2 text-white">{{ $producto->name }}</h3>
            <p class="text-muted-foreground mb-4 text-white/90">{{ $producto->description}}</p>
            <div class="flex items-center justify-between">
                <span class="text-primary font-bold text-lg text-lime-500">S/.{{ $producto->precio }}</span>
                <a class="group inline-block rounded-full bg-gradient-to-r from-teal-500 via-green-500 to-lime-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75" href="#">
                    <span class="block rounded-full bg-white px-8 py-3 text-sm font-medium group-hover:bg-transparent">
                        Agregar al carrito
                    </span>
                </a>
            </div>
        </div>
    @endforeach
</div>
