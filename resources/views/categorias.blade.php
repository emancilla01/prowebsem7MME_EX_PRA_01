@extends('plantillas.inicio_autenticado')
@section('menu2')
    @include('menu2')
@endsection
@section('contenido2')
<h1>Lista de Categorias</h1>
    <hr>
    <ul>
        @foreach ($categorias as $categoria)             
        <li>{{$categoria->id}} {{$categoria->nombre}}</li>
        @endforeach
    </ul>
    {{$categorias->links()}}
@endsection 

