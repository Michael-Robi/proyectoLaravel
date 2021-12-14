<h1>Hola mundo desde Laravel</h1>

{{-- llamamos a la variable compact pasteles 2--}}
@if($estudiantes->count() > 10) {{-- si el numero de registros es mayor a 10 --}}
	<p>Hay muchos registros</p> {{-- se muestra el mensaje --}}
@endif {{-- cerramos la estructura --}}

<tr> Estudiantes:
@foreach($estudiantes as $estudiante) {{-- por medio del forech el array:pasteles, lo relacionamos a un valor:pastel --}}
	<th>{{ $estudiante->nombre }},</th> {{-- extraemos el nombre del pastel --}}
@endforeach {{-- cerramos la estructura --}}
</tr>
