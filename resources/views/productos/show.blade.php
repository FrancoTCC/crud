@extends('template.plantillas')

@section('titulo', 'productos ver detalle')
@section('contenido')

    <ol>
        <li>Nombre: {{$producto->nombre}}</li>
        <li>Codigo: {{$producto->codigo}}</li>
        <li>Descripcion: {{$producto->descripcion}}</li>
        <li>Caracteristicas: {{$producto->caracteristicas}}</li>
        <li>Precio: {{$producto->precio}}</li>
        <li>Stock: {{$producto->stock}}</li>
        <li>imagen: {{$producto->img_path}}</li>
        <li>Categoria: {{$producto->categoria->nombre}}</li>

        
    </ol>
   
@endsection