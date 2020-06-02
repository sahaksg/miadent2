<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrthopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orthops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('pgender');
            $table->string('phone');
            $table->timestamps();
            $table->string('ceramics')->nullable();
            $table->string('tbridge')->nullable();
            $table->string('zirkon')->nullable();
            $table->string('dcrown')->nullable();
            $table->string('dtooth')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orthops');
    }
}
