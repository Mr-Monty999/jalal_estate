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
        Schema::create('office_city', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("office_id");
            $table->unsignedBigInteger("city_id");
            $table->timestamps();


            $table->foreign("office_id")->references("id")->on("offices")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("city_id")->references("id")->on("cities")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_city');
    }
};
