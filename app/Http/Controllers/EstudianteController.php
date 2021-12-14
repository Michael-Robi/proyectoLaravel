<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante; // Llamamos al modelo: Pastel
use App\Http\Requests\CrearEstudianteRequest; //llamar la clase para ejecutar las validaciones del formulario: Crear
use App\Http\Requests\EditarEstudianteRequest; //llamar la clase para ejecutar las validaciones del formulario: Editar

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $estudiantes = Estudiante::get();
         $estudiante = \DB::select("SELECT e.id id, CONCAT(e.nombre,' ',e.apellido) estudiantes, e.genero genero, e.grado grado, u.email correo, e.created_at FROM users u, estudiantes e
          WHERE u.id = e.user_id");
         return view('estudiantes.partials.index')->with('estudiantes', $estudiante);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.partials.create'); //Vista crear pasteles
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearEstudianteRequest $request)
     {
         // $estudiante = Estudiante::create($request->all());
         $usuario = \DB::insert('INSERT INTO users (name, email, password, type, remember_token, created_at, updated_at)
          VALUES (?, ?, ?, ?, NULL, NOW(), NOW())',
         [
           $request->input('nombre').' '.$request->input('apellido'),
           $request->input('email'),
           bcrypt('1234'),
           'student',
         ]);

         $user_id = \DB::select("SELECT id FROM users u
          WHERE u.name = ? AND u.email = ?",
          [
            $request->input('nombre').' '.$request->input('apellido'),
            $request->input('email'),
          ]);

          foreach($user_id as $posicion)
       	  {
       	   $id= $posicion->id ;
       	  }

         $estudiante = \DB::insert('INSERT INTO estudiantes (nombre, apellido, genero, grado, user_id, created_at, updated_at)
          VALUES (?, ?, ?, ?, ?, NOW(), NOW())',
         [
           $request->input('nombre'),
           $request->input('apellido'),
           $request->input('genero'),
           $request->input('grado'),
           $id,
         ]);

         return redirect()->route('estudiantes.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $estudiantes = Estudiante::find($id);

        $estudiantes = \DB::select("SELECT * FROM users u, estudiantes e
         WHERE u.id = e.user_id AND e.id=$id");
        return view('estudiantes.partials.edit')->with('estudiantes',$estudiantes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarEstudianteRequest $request, $id)
    {
        // $estudiante = Estudiante::find($id);
        // $estudiante->update($request->all());

        $estudiante = \DB::update("UPDATE users u, estudiantes e SET u.name=?, e.nombre=?, e.apellido=?, e.genero=?, e.grado=?, u.email=?
          WHERE u.id = e.user_id AND e.id=$id",
        [
          $request->input('nombre').' '.$request->input('apellido'),
          $request->input('nombre'),
          $request->input('apellido'),
          $request->input('genero'),
          $request->input('grado'),
          $request->input('email'),
        ]);

        // $estudiante->nombre = $request->input('nombre');
        // $estudiante->genero = $request->input('genero');
        // $estudiante->save();
        return redirect()->route('estudiantes.index');

        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estudiante::destroy($id);
        return redirect()->route('estudiantes.index');
    }
}
