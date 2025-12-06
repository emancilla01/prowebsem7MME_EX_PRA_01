@extends('plantillas.inicio_autenticado')
@section('menu2')
    @include('menu2')
@endsection
@section('contenido2')
<h1>Lista de Categorías</h1>
    <hr>
    <ul>
        @foreach ($category as $c)
        <li>{{$c->CategoryId}} - {{$c->CategoryName}}</li>
        @endforeach
    </ul>
    {{$category->links()}}

@endsection
