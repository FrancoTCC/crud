@extends('template.plantillas')

@section('titulo', 'clientes')
@section('contenido')
    <h2 class="text-2xl text-center">Tabla de clientes</h2>

    <a href="{{ route('clientes.create') }}"><button class="bg-yellow-400 py-2 px-4 rounded-md mb-4">Crear
            CLientes</button></a>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-black-500  p-4">
            <thead class="text-xs text-gray-700 uppercase bg-yellow-400 h-12">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Apellido Paterno</th>
                    <th scope="col" class="px-6 py-3">Apellido Materno</th>
                    <th scope="col" class="px-6 py-3">Telefono</th>
                    <th scope="col" class="px-6 py-3">Correo</th>
                    <th scope="col" class="px-6 py-3">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clientes as $cliente)
                    <tr class="bg-gray-100 border-b  ">
                        <td class="px-6 py-4">{{ $cliente->nombre }}</td>
                        <td class="px-6 py-4">{{ $cliente->apellidoPat }}</td>
                        <td class="px-6 py-4">{{ $cliente->apellidoMat }}</td>
                        <td class="px-6 py-4">{{ $cliente->telefono }}</td>
                        

                        <td class="px-1 py-2 flex gap-1 items-center">

                            <a href="{{ route('clientes.edit', $cliente) }}"><button
                                    class="bg-green-400 py-2 px-1 rounded-md mb-4">Editar</button></a>
                            <a href="{{ route('clientes.show', $cliente) }}"><button
                                    class="bg-yellow-200 py-2 px-1 rounded-md mb-4">Ver más</button></a>
                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST">
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
