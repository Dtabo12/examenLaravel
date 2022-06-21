<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('paciente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('documento', 50);
            $table->string('tipoDocumento', 50);
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->string('direccion', 50);
            $table->string('telefono', 50);
            $table->string('genero', 50);
            $table->date('fechaNacimiento');
            $table->string('estadoCivil', 50);
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
        //
    }
}
