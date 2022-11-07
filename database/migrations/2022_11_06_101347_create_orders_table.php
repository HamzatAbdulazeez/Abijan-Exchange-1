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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('currency')->nullable();
            $table->string('pay_with')->nullable();
            $table->string('amount')->nullable();
            $table->string('unit')->nullable();
            $table->string('eth_wallet')->nullable();
            $table->string('btc_wallet')->nullable();
            $table->string('pm_wallet')->nullable();
            $table->string('usdt_wallet')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('orders');
    }
};
