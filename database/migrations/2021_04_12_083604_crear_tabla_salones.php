<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaSalones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salones', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',60);//nombre tipoString('campo',valor)
            $table->enum('dia',['lunes','martes','miercoles','jueves','viernes']); //listaDeValores enum('nombre',['valor','valor++'])
            $table->string('materia_id',60);
            $table->enum('grado',['6','7','8','9','10','11']);
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
        Schema::dropIfExists('salones');
    }
}
