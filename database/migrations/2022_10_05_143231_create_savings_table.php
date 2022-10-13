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
        Schema::create('savings', function (Blueprint $table) {
            $table->id();



            $table->unsignedBigInteger('user_id_name')->nullable();
            $table->unsignedBigInteger('user_id_amount')->nullable();

            $table->bigInteger('pay_amount')->nullable;
            $table->bigInteger('total_save')->nullable;

            

            $table->foreign('user_id_name')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id_amount')->references('id')->on('users')->onDelete('cascade');


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
        Schema::dropIfExists('savings');
    }
};
