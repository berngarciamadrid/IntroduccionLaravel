{{-- Escapar a la información de variables con !!Por ejemplo {{ !!$nombre!! }} --}}
@include('contacto.cabecera')

{{-- Comentario de HTML --}}
{{-- <h1> Página de contacto {{$nombre}} {{isset($edad) && !is_null($edad) ? $edad : 'No existe la edad'}}</h1> --}}

{{-- Otra forma de hacerlo --}}
<h1> Página de contacto {{$nombre}}</h1>
@if(is_null($edad))
    No existe la edad
@else
    Si existe la edad: {{$edad}}
@endif
<br>
{{-- Tabla del 2 por ejemplo --}}
@for($i = 0; $i <=10; $i++)
    {{ $i. ' x 2 = '.($i*2) }} <br>
@endfor

<?php $f = 1; ?>
@while($f<13)
    <p>{{$f. ' Que no lo se '}}</p>
    <?php $f++ ?>
@endwhile
<br>
<h1> Listado de frutas :</h1>
@foreach($frutas as $fruta)
   <p>{{$fruta}}</p>

@endforeach
