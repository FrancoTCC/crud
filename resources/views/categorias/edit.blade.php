@extends('template.plantillas')

@section('titulo', 'categorias editar')
@section('contenido')

    <div>

        <div>
            <form action="{{ route('categorias.update', $categoria) }}" method="POST">
                @csrf
                @method('put')
                <label for="" class="flex flex-col">
                    Nombre:
                    <input type="text" name="nombre" value="{{ $categoria->nombre }}">
                </label>
                <label class="flex flex-col">
                    Descripcion:
                    <textarea name="descripcion" cols="30" rows="4">{{ $categoria->descripcion }}</textarea>
                </label>

                <div class="flex justify-center mt-4 gap-4">

                    <button class="bg-yellow-400 py-2 px-4 rounded-md mb-4" type="submit">Guardar</button>
                    <a href="{{ route('categorias.index') }}"><button
                            class="bg-yellow-100 py-2 px-4 rounded-md mb-4">Volver</button></a>
                </div>
            </form>
        </div>

    </div>

@endsection
