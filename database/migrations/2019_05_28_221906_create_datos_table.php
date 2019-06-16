<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30)->unique();
            $table->string('ciudad',30);
            $table->string('pais',30);
            $table->string('telefono',30);
            $table->string('celular',30);
            $table->string('email',30);
            $table->string('direccion',50);

            $table->timestamps();
        });

        DB::table('datos')->insert(array(
            'id'=>'1',
            'nombre'=>'Mi Empresa',
            'ciudad'=>'Pasto',
            'pais'=>'Colombia',
            'telefono' => '0327228417',
            'celular' => '+57 3173178899',
            'email' => 'miempresa@miempresa.com',
            'direccion' => 'av las americas'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
}
