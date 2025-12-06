@extends('plantillas.inicio_autenticado')
@section('menu2')
    @include('menu2')
@endsection
@section('contenido2')
<h1>Lista de Paises</h1>
    <hr>
    <ul>
        @foreach ($country as $pais)
        <li>{{$pais->CountryId}} - {{$pais->CountryName}}</li>
        @endforeach
    </ul>
    {{$country->links()}}


    {{-- <ul>
        @foreach ($productos as $producto)
        <li>{{$producto->id}} {{$producto->nombre}}</li>
        @endforeach
    </ul>
    {{$productos->links()}} --}}
@endsection

