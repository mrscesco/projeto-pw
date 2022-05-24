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
        Schema::create('comprovantedoacao', function (Blueprint $table) {
            $table->id();
            $table->date('datadonation');
            $table->string('pontuacao');

            /* chave estrangeira */

            $table->unsignedBigInteger('id_usuarioRemetente');
            $table->foreign('id_usuarioRemetente')->references('id')->on('cliente'); 

            $table->unsignedBigInteger('id_usuarioDestinatario');
            $table->foreign('id_usuarioDestinatario')->references('id')->on('cliente'); 

            $table->unsignedBigInteger('id_doacao');
            $table->foreign('id_doacao')->references('id')->on('doacao'); 




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
        Schema::dropIfExists('comprovantedoacao');
    }
};
