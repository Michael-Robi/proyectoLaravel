<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //llama a la clase Faker

class SalonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES'); //crear la informacion de cada campo en Español
        $dia = ['lunes','martes','miercoles','jueves','viernes'];
        $id = 5;

        for ($i=1; $i<=5; $i++) {
        \DB::table('salones')->insert(array( //en la tabla pasteles inserta informacion por registro
          'descripcion' => 'salon '.$i,
          'dia' => $dia[$i-1],
          'materia_id' => $i,
          'grado' => $faker->randomElement(['6','7','8','9','10','11']),
          'created_at' => date('Y-m-d H:m:s'), //asigna una fecha y hora de creacion
          'updated_at' => date('Y-m-d H:m:s')  //asigna una fecha y hora de modificacion
          ));
        }
    }
}
