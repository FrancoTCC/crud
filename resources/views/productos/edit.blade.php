@extends('template.plantillas')

@section('titulo', 'productos editar')
@section('contenido')

    <div>

        <div>
            <form action="{{ route('productos.update', $producto) }}" method="POST" >
                @csrf
                @method('put')
                <div class="flex gap-4 justify-center">

                
                    <div class="flex flex-col">

                        <label for="" class="flex flex-col">
                            Codigo
                            <input type="text" value="{{ $producto->codigo }}" name="codigo">
                        </label>
                        <label for="" class="flex flex-col">
                            Nombre
                            <input type="text" value="{{ $producto->nombre }}" name="nombre">
                        </label>
                        <label for="" class="flex flex-col">
                            Precio
                            <input type="number" value="{{ $producto->precio }}" name="precio">
                        </label>
                        <label for="" class="flex flex-col">
                            Descripcion
                            <textarea name="descripcion" cols="30" rows="10">{{ $producto->descripcion }}</textarea>

                        </label>
                    </div>
                    <div class="flex flex-col">

                        <label for="" class="flex flex-col">
                            Stock
                            <input type="number" value="{{ $producto->stock }}" name="stock">
                        </label>
                        <label for="" class="flex flex-col">
                            Imagen
                            <input type="text" value="{{ $producto->img_path }}" name="img_path">
                        </label>
                        <label for="" class="flex flex-col">
                            Categoria
                            <select name="categoria_id" id="">
                                @foreach ($categorias as $categoria)
                                    @if ($categoria->id == $producto->categoria_id)
                                        <option value="{{ $categoria->id }}" selected>{{ $categoria->nombre }}</option>
                                    @else
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </label>
                        <label for="" class="flex flex-col">
                            Caracteristicas
                            <textarea name="caracteristicas" cols="30" rows="10">{{ $producto->caracteristicas }}</textarea>

                        </label>
                    </div>
                </div>


                <div class="flex justify-center gap-4 mt-4">
                    <button class="bg-yellow-400 py-2 px-4 rounded-md mb-4" type="submit">actualizar</button>
                    <a href="{{ route('productos.index') }}"><button
                            class="bg-yellow-100 py-2 px-4 rounded-md mb-4">Volver</button></a>
                </div>
            </form>
        </div>

    </div>

@endsection
