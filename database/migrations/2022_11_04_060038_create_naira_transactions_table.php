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
        Schema::create('naira_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('deposit_method')->nullable();
            $table->string('trf_amount')->nullable();
            $table->string('deposit_fee')->nullable();
            $table->string('fee_method')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('naira_transactions');
    }
};
