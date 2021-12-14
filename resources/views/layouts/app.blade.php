<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @section('styles_laravel')
		{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
		{!! Html::style('datatables/datatables.min.css') !!}
		{!! Html::style('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') !!}

    {{-- Iconos --}}
    	{!! Html::script('fonts/all.js') !!}
		@show

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sección') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- @include('partials.layout.navbar') --}}
    		{{-- @include('partials.layout.errors') --}}
    		<div class="container">
    			<div class="row">
    				<div class="col-md-10 col-md-offset-1">
    					@yield('content')
    				</div>
    			</div>
    		</div>
    		<!-- Scripts -->
    		{!! Html::script('jquery/jquery-3.3.1.min.js') !!}

    		{!! Html::script('popper/popper.min.js') !!}

    		{!! Html::script('bootstrap/js/bootstrap.min.js') !!}
    		{!! Html::script('datatables/datatables.min.js') !!}

    		<script>
    			$(document).ready(function() {
    			    $('#MyTable').DataTable({
    			    //para cambiar el lenguaje a español
    			        "language": {
    			                "lengthMenu": "Mostrar _MENU_ registros",
    			                "zeroRecords": "No se encontraron resultados",
    			                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    			                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    			                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    			                "sSearch": "Buscar:",
    			                "oPaginate": {
    			                    "sFirst": "Primero",
    			                    "sLast":"Último",
    			                    "sNext":"Siguiente",
    			                    "sPrevious": "Anterior"
    						    },
    						    "sProcessing":"Procesando...",
    			            }
    			    });
    			});
    		</script>
    </div>
</body>
</html>
