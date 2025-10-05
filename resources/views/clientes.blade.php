@extends('plantillas.inicio_autenticado')
@section('menu2')
    @include('menu2')
@endsection
@section('contenido2')
<h1>Lista de Clientes</h1>
    <hr>
    {{-- <ul>
        @foreach ($clientes as $customer)             
        <li>{{$customer->customer_id}} {{$customer->first_name}}</li>
        @endforeach
    </ul>
    {{$clientes->links()}} --}}
@endsection 

