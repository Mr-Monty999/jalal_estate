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
        Schema::create('ad_city', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("ad_id");
            $table->unsignedBigInteger("city_id");
            $table->timestamps();


            $table->foreign("ad_id")->references("id")->on("ads")->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('ad_city');
    }
};
