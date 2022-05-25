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
        Schema::create('donation', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('postdate');
            $table->string('description');
            $table->string('size');
            $table->string('color');

            /* chave estrangeira */

            $table->unsignedBigInteger('id_gender');
            $table->foreign('id_gender')->references('id')->on('gender');     

            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users'); 

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
        Schema::dropIfExists('donation');
    }
};
