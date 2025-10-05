@extends('plantillas.inicio_autenticado')
@section('menu2')
    @include('menu2')
@endsection
@section('contenido2')
<h1>Lista de Productos</h1>
    <hr>
    <ul>
        @foreach ($productos as $producto)
        <li>{{$producto->id}} {{$producto->nombre}}</li>
        @endforeach
    </ul>
    {{$productos->links()}}
@endsection

