@extends('plantillas.plantilla1')
@section('menu')
    @include('logmenu')
@endsection
@section('contenido')
<div class=" justify-content-center align-items-center" style="height: 20vh;">
    <h3>En esta sección encontrarás respuestas a las preguntas más frecuentes sobre el uso del sistema:</h3>
</div>

<div class="d-flex justify-content-center align-items-center" style="height: 20vh; flex-direction: column;">
    
<ul>
    <li><strong>¿Cómo puedo registrarme?</strong></li>
    <li>Accede a la opción Crear cuenta y completa tus datos. Recibirás un correo de confirmación para activar tu perfil.</li>
    <li><strong>¿Cómo realizo una compra o venta?</strong></li>
    <li>Desde el panel principal, selecciona la sección Ventas o Compras, ingresa la información solicitada y confirma la operación.</li>

    <li><strong>¿Puedo editar o eliminar un registro?</strong></li>
    <li>Sí. Cada módulo cuenta con opciones para modificar o eliminar datos cuando sea necesario.</li>
    <li><strong>¿Qué hago si tengo problemas con el acceso?</strong></li>
    <li>Verifica tu usuario y contraseña. Si el problema persiste, utiliza la opción Recuperar acceso o contáctanos para asistencia.</li>
</ul>

Si necesitas más soporte, envíanos un mensaje a soporte@comercializadora.com
</div>
@endsection 