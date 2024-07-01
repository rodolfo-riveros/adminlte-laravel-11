@php
    $productos = \App\Models\Product::all();
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
</head>
<body>
    <div class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">
        <header class="bg-primary text-primary-foreground py-4 px-6">
            @include('components.navbar')
        </header>
        <main class="flex-1 bg-background">
            <div class="container mx-auto py-8 px-4 grid grid-cols-1 md:grid-cols-[240px_1fr] gap-8">
                @include('components.categoria', ['categories' => $categories], ['productos' => $productos])
                @include('components.producto', ['productos' => $productos])
            </div>
            @include('components.footer')
        </main>
    </div>
</body>
</html>
