<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->date('fecha');
            $table->integer('parcial_1')->length(3);
            $table->integer('parcial_2')->length(3);
            $table->integer('final')->length(3);
            $table->unsignedBigInteger('id_Students')->nullable();
            $table->foreign('id_Students')->references('id')->on('Students')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('notes');
    }
}
