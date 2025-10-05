@extends('plantillas.inicio_autenticado')
@section('menu2')
    @include('menu2')
@endsection
@section('contenido2')
<h1>Lista de Proveedores</h1>
    <hr>
    <ul>
        @foreach ($proveedores as $proveedor)
        <li>{{$proveedor->id}} {{$proveedor->nombre}}</li>
        @endforeach
    </ul>
    {{$proveedores->links()}}
@endsection

