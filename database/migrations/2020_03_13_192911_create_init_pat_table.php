<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitPatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initial', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('pgender');
            $table->string('phone');
            $table->timestamps();
            $table->string('t1')->nullable();
            $table->string('t2')->nullable();
            $table->string('t3')->nullable();
            $table->string('t4')->nullable();
            $table->string('t5')->nullable();
            $table->string('t6')->nullable();
            $table->string('t7')->nullable();
            $table->string('t8')->nullable();
            $table->string('t9')->nullable();
            $table->string('t10')->nullable();
            $table->string('t11')->nullable();
            $table->string('t12')->nullable();
            $table->string('t13')->nullable();
            $table->string('t14')->nullable();
            $table->string('t15')->nullable();
            $table->string('t16')->nullable();
            $table->string('t17')->nullable();
            $table->string('t18')->nullable();
            $table->string('t19')->nullable();
            $table->string('t20')->nullable();
            $table->string('t21')->nullable();
            $table->string('t22')->nullable();
            $table->string('t23')->nullable();
            $table->string('t24')->nullable();
            $table->string('t25')->nullable();
            $table->string('t26')->nullable();
            $table->string('t27')->nullable();
            $table->string('t28')->nullable();
            $table->string('t29')->nullable();
            $table->string('t30')->nullable();
            $table->string('t31')->nullable();
            $table->string('t32')->nullable();
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
        Schema::dropIfExists('initial');
    }
}
