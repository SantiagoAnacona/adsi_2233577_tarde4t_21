<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 50) ;
            $table->string('Apellido', 50) ;
            $table->integer('Cedula') ;
            $table->string('Email', 40) ;
            $table->integer('Celular')->lengt(10);
            $table->string('Sexo', 20);
            $table->integer('Edad')->lengt(10);
            $table->integer('Salario')->lengt(10);
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
        Schema::dropIfExists('clients');
    }
}
