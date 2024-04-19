@extends('template.plantillas')

@section('titulo', 'productos crear')
@section('contenido')

    <div>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="flex gap-4 justify-center">
                <div class="flex flex-col">
                    <label for="" class="flex flex-col">
                        Codigo
                        <input class="h-10 px-2 rounded-md" type="text" name="codigo">
                    </label>
                    <label for="" class="flex flex-col">
                        Nombre
                        <input class="h-10 px-2 rounded-md" type="text" name="nombre">
                    </label>
                    <label for="" class="flex flex-col">
                        Precio
                        <input class="h-10 px-2 rounded-md" type="number" name="precio">
                    </label>
                    <label for="" class="flex flex-col">
                        Descripcion
                        <textarea name="descripcion" cols="30" rows="4" class="class="px-2""></textarea>

                    </label>

                </div>
                <div class="flex flex-col">


                    <label for="" class="flex flex-col">
                        Stock
                        <input class="h-10 px-2 rounded-md" type="number" name="stock">
                    </label>
                    <label for="" class="flex flex-col">
                        Imagen
                        <input class="h-10 px-2 rounded-md" class="bg-red-500" type="text" name="img_path">
                    </label>
                    <label for="" class="flex flex-col">
                        Categoria
                        <select name="categoria_id" id="" class="h-10 px-2 rounded-md">
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label for="" class="flex flex-col">
                        Caracteristicas
                        <textarea name="caracteristicas" cols="30" rows="4" class="px-2"></textarea>

                    </label>
                </div>

            </div>
            <div class="flex justify-center mt-4 gap-4">

                <input type="submit" value="Crear" class="bg-yellow-400 py-2 px-4 rounded-md mb-4">

            </div>
        </form>
        <div class="flex justify-center mt-4 gap-4">


            <a href="{{ route('productos.index') }}"><button
                    class="bg-yellow-100 py-2 px-4 rounded-md mb-4">Volver</button></a>
        </div>

    </div>

@endsection
