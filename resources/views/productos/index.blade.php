@extends('template.plantillas')

@section('titulo', 'productos')
@section('contenido')
    <h2 class="text-2xl text-center">Tabla de productos</h2>

    <a href="{{ route('productos.create') }}"><button class="bg-yellow-400 py-2 px-4 rounded-md mb-4">Crear
            Productos</button></a>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-black-500  p-4">
            <thead class="text-xs text-gray-700 uppercase bg-yellow-400 h-12">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Descripcion</th>
                    <th scope="col" class="px-6 py-3">Stock</th>
                    <th scope="col" class="px-6 py-3">Precio</th>
                    <th scope="col" class="px-6 py-3">Categoria</th>
                    <th scope="col" class="px-6 py-3">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($productos as $producto)
                    <tr class="bg-gray-100 border-b  ">
                        <td class="px-6 py-4">{{ $producto->nombre }}</td>
                        <td class="px-6 py-4">{{ $producto->descripcion }}</td>
                        <td class="px-6 py-4">{{ $producto->stock }}</td>
                        <td class="px-6 py-4">{{ $producto->precio }}</td>
                        <td class="px-6 py-4">{{ $producto->Categoria->nombre }}</td>

                        <td class="px-1 py-2 flex gap-1 items-center">

                            <a href="{{ route('productos.edit', $producto) }}"><button
                                    class="bg-green-400 py-2 px-1 rounded-md mb-4">Editar</button></a>
                            <a href="{{ route('productos.show', $producto) }}"><button
                                    class="bg-yellow-200 py-2 px-1 rounded-md mb-4">Ver más</button></a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="bg-red-600 py-2 px-1 rounded-md mb-4" type="submit">eliminar</button>
                            </form>
                        </td>

                    </tr>
                @empty
                    <p>no hay registros</p>
                @endforelse
            </tbody>
        </table>
    </div>









@endsection
