<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEstudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',60);//nombre tipoString('campo',valor)
            $table->string('apellido',60);
            $table->enum('genero',['masculino','femenino']); //listaDeValores enum('nombre',['valor','valor++'])
            $table->enum('grado',['6','7','8','9','10','11']);
            $table->string('user_id',60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
