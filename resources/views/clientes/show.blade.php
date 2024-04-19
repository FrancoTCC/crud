@extends('template.plantillas')

@section('titulo', 'clientes ver detalle')
@section('contenido')

    <ol>
        <li>Nombre: {{ $cliente->nombre }}</li>
        <li>Apellido paterno: {{ $cliente->apellidoPat }}</li>
        <li>Apellido Materno: {{ $cliente->apellidoMat }}</li>
        <li>Telefono: {{ $cliente->telefono }}</li>
        <li>Correo: {{ $cliente->correo }}</li>



    </ol>

@endsection
