<h1 class="text-primary">Control de Estudiantes</h1>

<table class="table table-bordered" id="MyTable">
	<thead>
		<tr>
			<th class="text-center">ID</th>
			<th class="text-center">Estudiante</th>
			<th class="text-center">Genero</th>
			<th class="text-center">Grado</th>
			<th class="text-center">Correo</th>
			<th class="text-center">Fecha</th>
			<th class="text-center">Acciones</th>
		</tr>
	</thead>

	<tbody>

	@foreach($estudiantes as $estudiante)
	<tr>
		<td class="text-center">{{ $estudiante->id }}</td>
		<td class="text-center">{{ $estudiante->estudiantes }}</td>
		<td class="text-center">{{ $estudiante->genero }}</td>
		<td class="text-center">{{ $estudiante->grado }}</td>
		<td class="text-center">{{ $estudiante->correo }}</td>
		<td class="text-center">{{ $estudiante->created_at }}</td>

		{!! Form::open(['route' => ['estudiantes.destroy', $estudiante->id], 'method' => 'DELETE']) !!}
		<td class="text-center">
			<button type="submit" class="btn btn-danger btn-xs" title="Eliminar">
				<i class="fas fa-trash"></i>
			</button>
			<a href="{{ url('/estudiantes/'.$estudiante->id.'/edit') }}" class="btn btn-info btn-xs" title="Actualizar">
				<i class="fas fa-sync"></i>
			</a>
		</td>
		{!! Form::close() !!}
	</tr>
	@endforeach

	</tbody>
<!--
	<tfoot>
		<tr>
			<th class="text-center">ID</th>
			<th class="text-center">Nombre</th>
			<th class="text-center">Grado</th>
			<th class="text-center">Genero</th>
			<th class="text-center">Fecha</th>
			<th class="text-center">Acciones</th>
		</tr>
	</tfoot> -->
</table>
