@extends('plantillas.inicio_autenticado')
@section('menu2')
    @include('menu2')
@endsection
@section('contenido2')
<h1>Lista de Clientes</h1>
    <hr>
    <ul>
        @foreach ($clientes as $cliente)             
        <li>{{$cliente->id}} {{$cliente->nombre}}</li>
        @endforeach
    </ul>
    {{$clientes->links()}}
@endsection 

