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
        Schema::create('marketer_neighbourhood', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("marketer_id");
            $table->unsignedBigInteger("neighbourhood_id");
            $table->timestamps();


            $table->foreign("marketer_id")->references("id")->on("marketers")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("neighbourhood_id")->references("id")->on("neighbourhoods")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketer_neighbourhood');
    }
};
