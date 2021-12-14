@extends('layouts.app')

@section('content')

	@foreach ($estudiantes as $estudiante)
	<h4 class="text-center">Editar Estudiante: {{ $estudiante->nombre }}</h4>

	{!! Form::model($estudiante, [ 'route' => ['estudiantes.update', $estudiante->id], 'method' => 'PUT']) !!}

		@include('estudiantes.partials.formulario')

		<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>

	{!! Form::close() !!}
	@endforeach

	<a href="{{ url('/estudiantes/') }}" class="btn btn-secondary btn-xs" title="Inicio">
		<i class="fas fa-home"></i>
	</a>
@endsection
