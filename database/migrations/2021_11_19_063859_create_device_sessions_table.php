<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address', 25);
            $table->string('device_id', 100);
            $table->string('platform', 25);
            $table->string('brand', 25);
            $table->string('model', 25);
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
        Schema::dropIfExists('device_sessions');
    }
}
