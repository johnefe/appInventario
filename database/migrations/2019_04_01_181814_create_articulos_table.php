<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('codigo', 50)->nullable();
            $table->string('nombre', 100)->unique();
            $table->decimal('precio_venta',11, 2);
            $table->integer('stock');
            $table->string('descripcion', 256)->nullable();
            $table->boolean('condicion')->default(1);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.$table->unsignedInteger('role_id')->default(2);
     *   table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
