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
        Schema::create('donationreceipt', function (Blueprint $table) {
            $table->id();
            $table->date('donationdate');
            $table->string('pontuacao');

            /* chave estrangeira */

            $table->unsignedBigInteger('id_senderUser');
            $table->foreign('id_senderUser')->references('id')->on('users'); 

            $table->unsignedBigInteger('id_recipientUser');
            $table->foreign('id_recipientUser')->references('id')->on('users'); 

            $table->unsignedBigInteger('id_donation');
            $table->foreign('id_donation')->references('id')->on('donation'); 

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
        Schema::dropIfExists('donationreceipt');
    }
};
