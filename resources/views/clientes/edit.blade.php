@extends('template.plantillas')

@section('titulo', 'clientes editar')
@section('contenido')

    <div>

        <div>
            <form action="{{ route('clientes.update', $cliente) }}" method="POST">
                @csrf
                @method('put')
                <div class="flex gap-4 justify-center">
                    <div class="flex flex-col">

                        <label for="" class="flex flex-col">
                            Nombre
                            <input type="text" value="{{ $cliente->nombre }}" name="nombre">
                        </label>
                        <label for="" class="flex flex-col">
                            Apellido Paterno
                            <input type="text" value="{{ $cliente->apellidoPat }}" name="apellidoPat">
                        </label>
                        <label for="" class="flex flex-col">
                            Apellido Materno
                            <input type="text" value="{{ $cliente->apellidoMat }}" name="apellidoMat">
                        </label>

                    </div>
                    <div class="flex flex-col">

                        <label for="" class="flex flex-col">
                            Telefono
                            <input type="number" value="{{ $cliente->telefono }}" name="telefono">
                        </label>
                        <label for="" class="flex flex-col">
                            Correo
                            <input type="email" value="{{ $cliente->correo }}" name="correo">
                        </label>


                    </div>
                </div>

                <div class="flex justify-center gap-4 mt-4">
                    <button class="bg-yellow-400 py-2 px-4 rounded-md mb-4" type="submit">actualizar</button>
                    <a href="{{ route('clientes.index') }}"><button
                            class="bg-yellow-100 py-2 px-4 rounded-md mb-4">Volver</button></a>
                </div>

            </form>
        </div>

    </div>

@endsection
