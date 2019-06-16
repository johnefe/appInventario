<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30)->unique();
            $table->string('descripcion',30)->nullable();
            $table->boolean('condicion')->default(1);
            $table->timestamps();
        });
        DB::table('roles')->insert(array('id'=>'1','nombre'=>'Administrador','descripcion'=>'Administradores de area'));
        DB::table('roles')->insert(array('id'=>'2','nombre'=>'Ventas','descripcion'=>'Venderdor de area'));
        DB::table('roles')->insert(array('id'=>'3','nombre'=>'Almacén','descripcion'=>'Almacenero de area'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
