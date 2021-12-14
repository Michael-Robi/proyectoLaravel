<div class="form-group">
	{!! Form::label('nombre', 'Nombre', ['for' => 'nombre'] ) !!}
	{!! Form::text('nombre', null , ['class' => 'form-control', 'id' => 'nombre', 'placeholder' => 'Ingrese el nombre' ] ) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido', 'Apellido', ['for' => 'apellido'] ) !!}
	{!! Form::text('apellido', null , ['class' => 'form-control', 'id' => 'apellido', 'placeholder' => 'Ingrese el apellido' ] ) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Correo', ['for' => 'email'] ) !!}
	{!! Form::email('email', null , ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Ingrese el correo' ] ) !!}
</div>

<div class="form-group">
	{!! Form::label('genero', 'Genero', ['for' => 'genero'] ) !!}

	{!! $genero = isset($estudiante->genero) ? $estudiante->genero : ""; !!}

	<select name="genero" class="form-control">
		<option value="" disabled selected>Ingresa el Genero</option>
		<option value="masculino" {!! buscarSelect($genero,"masculino"); !!}>masculino</option>
		<option value="femenino" {!! buscarSelect($genero,"femenino"); !!}>femenino</option>
	</select>
</div>

<div class="form-group">
	{!! Form::label('grado', 'Grado', ['for' => 'grado'] ) !!}

	{!! $grado = isset($estudiante->grado) ? $estudiante->grado : ""; !!}

	<select name="grado" class="form-control">
		<option value="" disabled selected>Ingresa el Grado</option>
		<option value="6" {!! buscarSelect($grado,"6"); !!}>6</option>
		<option value="7" {!! buscarSelect($grado,"7"); !!}>7</option>
		<option value="8" {!! buscarSelect($grado,"8"); !!}>8</option>
		<option value="9" {!! buscarSelect($grado,"9"); !!}>9</option>
		<option value="10" {!! buscarSelect($grado,"10"); !!}>10</option>
		<option value="11" {!! buscarSelect($grado,"11"); !!}>11</option>
	</select>
</div>

<?php function buscarSelect($array,$campo) {
	if ($array===$campo) {
		echo "selected";
	}
} ?>
