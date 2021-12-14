<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante; // Llamamos al modelo: Pastel

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $estudiantes =\DB::select("SELECT e.id id, CONCAT(e.nombre,' ',e.apellido) estudiantes, e.genero genero, e.grado grado, u.email correo, e.created_at FROM users u, estudiantes e WHERE u.id = e.user_id");
        return view('home')->with('estudiantes', $estudiantes);
    }
}
