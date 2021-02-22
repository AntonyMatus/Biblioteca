<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('autor');
            $table->integer('status');
            $table->date('fecha_publicacion');
            $table->unsignedBigInteger('categories_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('foto');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('set null');
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
        Schema::dropIfExists('libros');
    }
}
