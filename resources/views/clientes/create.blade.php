@extends('template.plantillas')

@section('titulo', 'clientes crear')
@section('contenido')

    <div>
        <form action="{{ route('clientes.store') }}" method="POST" >
            @csrf
            <div class="flex gap-4 justify-center">
                <div class="flex flex-col">
                    <label for="" class="flex flex-col">
                        Nombre
                        <input class="h-10 px-2 rounded-md" type="text" name="nombre">
                    </label>
                    <label for="" class="flex flex-col">
                        Apellido Paterno
                        <input class="h-10 px-2 rounded-md" type="text" name="apellidoPat">
                    </label>
                    <label for="" class="flex flex-col">
                        Apellido Materno
                        <input class="h-10 px-2 rounded-md" type="text" name="apellidoMat">
                    </label>
            

                </div>
                <div class="flex flex-col">


                    <label for="" class="flex flex-col">
                        Telefono
                        <input class="h-10 px-2 rounded-md" type="number" name="telefono">
                    </label>
                    <label for="" class="flex flex-col">
                        Correo
                        <input class="h-10 px-2 rounded-md" class="bg-red-500" type="email" name="correo">
                    </label>
                    
                </div>
            </div>
            <div class="flex justify-center mt-4 gap-4">
    
                <input type="submit" value="Crear" class="bg-yellow-400 py-2 px-4 rounded-md mb-4">
            </div>
        </form>
        <div class="flex justify-center mt-4 gap-4">
            <a href="{{route('clientes.index')}}"><button class="bg-yellow-100 py-2 px-4 rounded-md mb-4">Volver</button></a>

        </div>
                

    </div>

@endsection
