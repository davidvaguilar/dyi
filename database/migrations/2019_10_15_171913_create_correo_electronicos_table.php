<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorreoElectronicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correo_electronicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id')->unsigned()->nullable();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->string('cuenta', 50);
            $table->string('pais', 70);
            $table->string('asunto', 70);
            $table->text('comentario');
            $table->text('observacion');
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
        Schema::dropIfExists('correo_electronicos');
    }
}
