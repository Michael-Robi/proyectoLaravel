<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //llama a la clase Faker

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES'); //crear la informacion de cada campo en Español
        for ($i=1; $i<=5; $i++) {

          \DB::select('call RegistrarNota(?, ?, ?, ?, ?)',
            array(
              $faker->randomElement(['1','2','3','4','5']),
              $faker->randomElement(['5','4','1','3','2']),
              $faker->randomElement(['3','2','4','5','1']),
              $i,
              $i
            )
          );

        }
    }
}
