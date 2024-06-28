<div class="bg-card p-6 rounded-lg shadow-md bg-gray-100 dark:bg-gray-900">
    <h2 class="text-lg font-bold mb-4 text-white">Categorías</h2>
    <div class="">
        <ul>
            @foreach ($categories as $category)
                <li class="mb-2">
                    <a href="#" wire:click.prevent="filterByCategory('{{ $category->id }}')" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                        <span class="w-2 h-2 rounded-full" style="background-color: #f59e0b;"></span>
                        {{ $category->name}}
                    </a>
                </li>
            @endforeach
            <li>
                <a href="#" wire:click.prevent="filterByCategory('')" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                    <span class="w-2 h-2 rounded-full" style="background-color: #000;"></span>
                    Todo los resultados
                </a>
            </li>
        </ul>
    </div>
</div>
