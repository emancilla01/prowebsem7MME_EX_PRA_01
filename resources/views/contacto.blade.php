@extends('plantillas.plantilla1')
@section('menu')
    @include('logmenu')
@endsection
@section('contenido')
<div class=" justify-content-center align-items-center" style="height: 20vh;">
    <h1>¿Tienes dudas, comentarios o necesitas más información sobre nuestros productos o servicios?
Estamos para ayudarte. </h1>
</div>
<div class=" justify-content-center align-items-center" style="height: 10vh;">
<h3>
Puedes comunicarte con nosotros a través de los siguientes medios:
</h3>
</div>
<div class="d-flex justify-content-center align-items-center" style="height: 20vh;">
<ul>
    <li>Formulario de contacto en nuestro sitio web</li>
    <li>Correo electrónico: contacto@comercializadora.com</li>
    <li>Teléfono: (000) 123-4567</li>
    <li>Horario de atención: Lunes a viernes, de 9:00 a.m. a 6:00 p.m.</li>
</ul>
</div>
<div class="d-flex justify-content-center align-items-center" style="height: 20vh;">
<h3>Dirección: Av. Principal #123, Ciudad, País</h3>
</div>
@endsection 