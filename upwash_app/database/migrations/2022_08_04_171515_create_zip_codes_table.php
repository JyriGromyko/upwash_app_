<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->id();

            $table->string('code')->comment('Code of index');
            $table->float('price')->default(0)->comment('Price for distance');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zip_codes');
    }
};
