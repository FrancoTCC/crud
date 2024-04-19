<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

</head>

<body>


    <div class="w-full">
        <div class="bg-yellow-400 flex h-12 flex-center items-center w-full">
            <nav>
                <a href="{{ route('categorias.index') }}" class="text-white text-xl p-4">Categorias</a>
                <a href="{{ route('productos.index') }}" class="text-white text-xl p-4">Productos</a>
                <a href="{{ route('clientes.index') }}" class="text-white text-xl p-4">Clientes</a>
            </nav>
        </div>
        <div class="p-5 bg-gray-100">
            @yield('contenido')
        </div>
    </div>
</body>

</html>
