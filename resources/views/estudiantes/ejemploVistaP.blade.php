@extends('layouts.app') {{-- para usar la plantilla de la carpeta: layours, el archivo: app --}}

@section('title','Vista de ejemplo') {{-- asignar la seccion titulo --}}

@section('content') {{-- asignar la seccion contenido --}}
	<a class="btn btn-success pull-right" href="{{ url('/estudiantes/create') }}" role="button">Nuevo Estudiante</a>
	<a class="btn btn-secondary pull-right" href="{{ url('/estudiantes/') }}" role="button">Principal</a>

	@include('estudiantes.partials.lista') {{-- pastial incrusta HTML en este caso de una ruta mostramos nuestra vista lista. --}}
@endsection
