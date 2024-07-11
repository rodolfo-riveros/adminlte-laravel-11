@php
    $productos = $productos ?? \App\Models\Product::all();
    $categories = \App\Models\Category::all();
@endphp
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XSTATION</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">
        <header class="bg-primary text-primary-foreground py-4 px-6">
            @include('components.navbar')
        </header>
        <main class="flex-1 bg-background">
            <div class="container mx-auto py-8 px-4">
                <div class="grid grid-cols-1 md:grid-cols-[240px_1fr] gap-8">
                    @include('components.categoria', [
                        'categories' => $categories,
                        'productos' => $productos,
                    ])
                    @include('components.producto', ['productos' => $productos])
                </div>
                @include('components.footer')
            </div>
        </main>
    </div>

    <script>
        $(document).ready(function() {
            $('.filter-category').on('click', function(e) {
                e.preventDefault();
                var categoryId = $(this).data('category') || 'all'; // Use 'all' for all products
                $.ajax({
                    url: '/filter-products/' + categoryId,
                    method: 'GET',
                    success: function(data) {
                        $('#product-list').empty();
                        data.forEach(function(product) {
                            var productHtml = `
                                <div class="bg-card p-4 rounded-lg shadow-md bg-slate-800 product-item">
                                    <img src="/storage/${product.image}" alt="${product.name}"
                                        class="w-full h-48 object-cover rounded-lg mb-4 cursor-pointer" />
                                    <h3 class="text-lg font-bold mb-2 text-white cursor-pointer">${product.name}</h3>
                                    <p class="text-muted-foreground mb-4 text-white/90">${product.description.substring(0, 100)}</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-primary font-bold text-lg text-lime-500">S/.${product.precio}</span>
                                        <a href="/carrito?product_ids=[${product.id}]"
                                            class="group inline-block rounded-full bg-gradient-to-r from-teal-500 via-green-500 to-lime-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75">
                                            <span class="block rounded-full bg-white px-8 py-3 text-sm font-medium group-hover:bg-transparent">
                                                Agregar al carrito
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            `;
                            $('#product-list').append(productHtml);
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
