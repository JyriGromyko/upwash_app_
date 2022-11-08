<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->integer('from');
            $table->string("name");
            $table->string("secondname");
            $table->string("email");
            $table->string("phone");
            $table->string("registrar");
            $table->string("time_d");
            $table->string("time_m");
            $table->string("time");
            $table->string("car_type");
            $table->string("main_type");
            $table->string("upsells");
            $table->integer('price');
            $table->text("comment");
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
        //Schema::dropIfExists('clients');
    }
}
