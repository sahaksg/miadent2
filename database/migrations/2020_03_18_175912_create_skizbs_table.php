<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkizbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skizbs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('pgender');
            $table->string('phone');
            $table->string('t11')->nullable();
            $table->string('t12')->nullable();
            $table->string('t13')->nullable();
            $table->string('t14')->nullable();
            $table->string('t15')->nullable();
            $table->string('t16')->nullable();
            $table->string('t17')->nullable();
            $table->string('t18')->nullable();
            $table->string('t21')->nullable();
            $table->string('t22')->nullable();
            $table->string('t23')->nullable();
            $table->string('t24')->nullable();
            $table->string('t25')->nullable();
            $table->string('t26')->nullable();
            $table->string('t27')->nullable();
            $table->string('t28')->nullable();
            $table->string('t31')->nullable();
            $table->string('t32')->nullable();
            $table->string('t33')->nullable();
            $table->string('t34')->nullable();
            $table->string('t35')->nullable();
            $table->string('t36')->nullable();
            $table->string('t37')->nullable();
            $table->string('t38')->nullable();
            $table->string('t41')->nullable();
            $table->string('t42')->nullable();
            $table->string('t43')->nullable();
            $table->string('t44')->nullable();
            $table->string('t45')->nullable();
            $table->string('t46')->nullable();
            $table->string('t47')->nullable();
            $table->string('t48')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('skizbs');
    }
}
