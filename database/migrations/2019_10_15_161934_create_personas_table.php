<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_documento', 20)->nullable();
            $table->string('numero_documento', 20)->nullable();
            $table->string('pasaporte', 25)->nullable();
            $table->string('apodo', 50);
            $table->string('nombre', 70);
            $table->string('paterno', 50);
            $table->string('materno', 50);
            $table->string('sexo', 10);        //masculino, femenino   
            $table->date('fecha_nacimiento');
            $table->string('imagen', 200)->nullable();
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
        Schema::dropIfExists('personas');
    }
}
