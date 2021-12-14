<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //llama a la clase Faker

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES'); //crear la informacion de cada campo en Español
        $id = 5;

        for ($i=1; $i<=5; $i++) {
        \DB::table('profesores')->insert(array( //en la tabla pasteles inserta informacion por registro
          'nombre' => $faker->firstName, //asigna un nombre aleatorio
          'apellido' => $faker->lastName,
          'genero' => $faker->randomElement(['masculino','femenino']), //asigna un sabor aleatorio
          'profesion' => $faker->randomElement(['Licenciado','Ingeniero','Tecnologo']),
          'user_id' => ($id+$i),
          'created_at' => date('Y-m-d H:m:s'), //asigna una fecha y hora de creacion
          'updated_at' => date('Y-m-d H:m:s')  //asigna una fecha y hora de modificacion
          ));
        }
    }
}
