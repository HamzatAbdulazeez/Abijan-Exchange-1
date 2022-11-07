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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('btc_wallet')->nullable();
            $table->string('eth_wallet')->nullable();
            $table->string('bch_wallet')->nullable();
            $table->string('usdt_wallet')->nullable();
            $table->string('pm_name')->nullable();
            $table->string('pm_number')->nullable();
            $table->string('receive_btc_wallet')->nullable();
            $table->string('btc_r_qr_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
};
