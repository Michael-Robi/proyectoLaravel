<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaNotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->decimal('periodo1', 9, 2);//nombre tipoString('campo',valor)
            $table->decimal('periodo2', 9, 2);
            $table->decimal('periodo3', 9, 2);
            $table->decimal('definitiva', 9, 2);
            $table->string('estado',60);
            $table->string('estudiante_id',60); //listaDeValores enum('nombre',['valor','valor++'])
            $table->string('materia_id',60);
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
        Schema::dropIfExists('notas');
    }
}
