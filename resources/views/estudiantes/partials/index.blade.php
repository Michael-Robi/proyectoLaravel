@extends('layouts.app') {{-- para usar la plantilla de la carpeta: layours, el archivo: app --}}

@section('content') {{-- asignar la seccion titulo --}}

	@if (auth()->user()->type === 'admin')
		<a class="btn btn-success pull-right" href="{{ url('/estudiantes/create') }}" role="button">Nuevo estudiante</a>

		@include('estudiantes.partials.table')
		{{-- pastial incrusta HTML en este caso de una ruta mostramos nuestra vista lista. --}}
	@else
	   <h3>Acceso restringido</h3>

		 <img alt="COMPUTACIÓN E INFORMÁTICA YOSH: IMAGENES GIF" src="https://3.bp.blogspot.com/-TpYZKxQ6_MI/VWXxM9fSq4I/AAAAAAAAABk/apgjw-VmON4/s1600/computador_%25281%2529.gif">

		 <a class="btn btn-primary pull-right" href="{{ url('/login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
		 role="button">Cerrar Sección</a>

	@endif

@endsection
