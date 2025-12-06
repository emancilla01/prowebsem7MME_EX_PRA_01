@extends('plantillas.inicio_autenticado')
@section('menu2')
    @include('menu2')
@endsection
@section('contenido2')
<h1>Lista de Ciudades</h1>
    <hr>
    <ul>
        @foreach ($city as $c)
        <li>{{$c->CityId}} - {{$c->CityName}} (Country: {{$c->CountryId}})</li>
        @endforeach
    </ul>
    {{$city->links()}}

@endsection
