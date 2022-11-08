<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('prices', function (Blueprint $table) {
            // Continues of services (minute)
            $table->string('ulk1_time')->default('30');
            $table->string('ulk2_time')->default('30');
            $table->string('ulk3_time')->default('30');
            $table->string('ulk4_time')->default('30');
            $table->string('sis1_time')->default('30');
            $table->string('sis2_time')->default('30');
            $table->string('sis3_time')->default('30');
            $table->string('mol1_time')->default('30');
            $table->string('mol2_time')->default('30');
            $table->string('mol3_time')->default('30');
        });
    }

    public function down()
    {
        Schema::table('prices', function (Blueprint $table) {
            $table->dropColumn('ulk1_time');
            $table->dropColumn('ulk2_time');
            $table->dropColumn('ulk3_time');
            $table->dropColumn('ulk4_time');
            $table->dropColumn('sis1_time');
            $table->dropColumn('sis2_time');
            $table->dropColumn('sis3_time');
            $table->dropColumn('mol1_time');
            $table->dropColumn('mol2_time');
            $table->dropColumn('mol3_time');
        });
    }
};
