<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id')->unsigned()->nullable();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->string('calle', 50);
            $table->string('departamento', 50)->nullable();
            $table->string('poblacion', 50)->nullable();
            $table->string('ciudad', 50);
            $table->string('comuna', 50);
            $table->string('region', 50);
            $table->string('pais', 70);
            $table->text('descripcion');
            $table->softDeletes();
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
        Schema::dropIfExists('domicilios');
    }
}
