<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

use App\Estudiante; // Llamamos al modelo: Pastel

Route::get('pruebasEs', function(){ //definimos la ruta pruebasPasteles
	$pasteles = Estudiante::Octavo()->get(); //Mostrar todos los registros de pasteles sabor a vainilla
	dd($pasteles); // mostrar variable en el navegador
});

Route::get('pruebasEs1', function(){ //definimos la ruta pruebasPasteles
	$estudiantes = Estudiante::Grado('10')->get(); //Mostrar todos los registros de pasteles sabor a vainilla
	dd($estudiantes); // mostrar variable en el navegador
});

Route::get('ejemplo', function(){
	$estudiantes = Estudiante::Grado('7')->get(); //scope genérico para obtener el primer pastel de cierto sabor
	return view('estudiantes.ejemploVistaP',compact('estudiantes')); // mandar a la vista el nombre y el sabor del pastel en sus respectivas variables
  return view('saludo',compact('pasteles'));
});

/*Trabajar en una ruta con un contralador*/
Route::resource('estudiantes', 'EstudianteController'); //resource nos permite llamar todos los metodos definidos en el controlador: PastelesController.
