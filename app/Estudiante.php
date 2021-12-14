<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
  protected $table = 'estudiantes'; //Llamamos la tabla pasteles de la BD.
  protected $fillable = ['nombre','apellido','genero','grado','user_id']; //Indicar los atributos que se van a utilizar para el CRUD.

  public function scopeOctavo($query){ //funcion scope encapsula un peticion
    return $query->where('grado','8'); //Devuelve una consulta
  }

  public function scopeGrado($query, $grado){ //funcion scope encapsula un peticion dinamica
    return $query->where('grado',$grado); //Devuelve una consulta dinamica al definir $sabor
  }

  public function scopeIdEst($query, $id){ //funcion scope encapsula un peticion dinamica
    return $query->where('id',$id); //Devuelve una consulta dinamica al definir $sabor
  }
}
