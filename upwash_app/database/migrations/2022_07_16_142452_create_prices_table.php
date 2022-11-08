<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->integer('step1_1');
            $table->integer('step1_2');
            $table->integer('step3_1');
            $table->integer('step3_2');
            $table->integer('step3_3');
            $table->integer('step4_1');
            $table->integer('step4_2');
            $table->integer('step4_3');
            $table->integer('step4_4');
            $table->integer('step4_5');
            $table->integer('step5_1');
            $table->integer('step5_2');
            $table->integer('step5_3');
            $table->integer('step5_4');
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
        //Schema::dropIfExists('prices');
    }
}
