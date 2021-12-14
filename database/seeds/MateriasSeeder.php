<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //llama a la clase Faker

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES'); //crear la informacion de cada campo en Español
        $descri = ['matematicas','ingles','español','fisica','artistica','religion'];
        $id = 5;

        for ($i=1; $i<=5; $i++) {
        \DB::table('materias')->insert(array( //en la tabla pasteles inserta informacion por registro
          'descripcion' => $descri[$i-1],
          'profesor_id' => ($id+$i),
          'created_at' => date('Y-m-d H:m:s'), //asigna una fecha y hora de creacion
          'updated_at' => date('Y-m-d H:m:s')  //asigna una fecha y hora de modificacion
          ));
        }
    }
}
