@extends('plantillas.inicio_autenticado')
@section('menu2')
    @include('menu2')
@endsection
@section('contenido2')
<h1>Lista de Ventas</h1>
    <hr>
    <ul>
        @foreach ($ventas as $venta)             
        <li>{{$venta->id}} {{$venta->cliente_id}} {{$venta->descripcion}} {{$venta->fecha}}</li>
        @endforeach
    </ul>
    {{$ventas->links()}}
@endsection 

