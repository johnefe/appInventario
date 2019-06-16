<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     * se utiliza para agregar nuevas tablas, indices a nuesta bd up()
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('descripcion', 256)->nullable();
            $table->boolean('condicion')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * revierte la operacion realizada por up()
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
