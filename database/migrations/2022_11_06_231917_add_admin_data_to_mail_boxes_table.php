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
        Schema::table('mail_boxes', function (Blueprint $table) {
            $table->boolean('admin_type')->default(0);
            $table->boolean('admin_message_type')->default(0);
            $table->boolean('admin_status')->default(0);
            $table->string('admin_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mail_boxes', function (Blueprint $table) {
            //
        });
    }
};
