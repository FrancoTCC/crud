@extends('template.plantillas')

@section('titulo', 'categorias crear')
@section('contenido')

    <div>
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <label for="" class="flex flex-col">
                Nombre
                <input class="h-10 px-2 rounded-md" type="text" name="nombre">
            </label>
            <label for="" class="flex flex-col">
                Descripcion
                <textarea name="descripcion" cols="30" rows="4"></textarea>
            </label>
            <div class="flex justify-center mt-4 gap-4">
    
                <button class="bg-yellow-400 py-2 px-4 rounded-md mb-4" type="submit">Guardar</button>
                
            </div>
        </form>
        <div class="flex justify-center mt-4 gap-4">
    
                
                <a href="{{ route('categorias.index') }}"><button
                        class="bg-yellow-100 py-2 px-4 rounded-md mb-4">Volver</button></a>
            </div>

    </div>

@endsection
