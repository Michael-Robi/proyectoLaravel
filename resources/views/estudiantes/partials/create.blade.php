@extends('layouts.app')

@section('content')
	{!! Form::open([ 'route' => 'estudiantes.store', 'method' => 'POST']) !!}

		@include('estudiantes.partials.formulario')

		<button type="submit" class="btn btn-success btn-block">Guardar</button>

	{!! Form::close() !!}

	<a href="{{ url('/estudiantes/') }}" class="btn btn-secondary btn-xs" title="Inicio">
		<i class="fas fa-home"></i>
	</a>
@endsection
