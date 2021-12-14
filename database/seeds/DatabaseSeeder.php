<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        /*Llamar Seeder*/
        $this->call('EstudiantesSeeder');
        $this->call('ProfesoresSeeder');
        $this->call('MateriasSeeder');
        $this->call('SalonesSeeder');
        $this->call('NotasSeeder');

        //Los métodos de Model: unguard() y reguard() sirven para anular temporalmente y luego reactivar ciertas protecciones de seguridad en el modelo,
        Model::unguard();
        factory('App\User', 10)->create(); //poblar la tabla usuario con 10 registros
        Model::reguard();
    }
}
