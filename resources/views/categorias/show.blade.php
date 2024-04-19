@extends('template.plantillas')

@section('titulo', 'categorias ver detalle')
@section('contenido')

    <ol>
        <li>Nombre: {{$categorias->nombre}}</li>
        <li>Descripcion: {{$categorias->nombre}}</li>
    </ol>
   
@endsection