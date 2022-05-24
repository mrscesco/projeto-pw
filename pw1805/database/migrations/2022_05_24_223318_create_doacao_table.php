<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacao', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('datapost');
            $table->string('descricao');
            $table->string('tamanho');
            $table->string('cor');

         /* chave estrangeira */

            $table->unsignedBigInteger('id_genero');
            $table->foreign('id_genero')->references('id')->on('genero');     

            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('cliente'); 

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
        Schema::dropIfExists('doacao');
    }
};
