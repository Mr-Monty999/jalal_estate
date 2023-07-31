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
        Schema::create('offer_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("offer_id");
            $table->unsignedBigInteger("type_id");
            $table->timestamps();


            $table->foreign("offer_id")->references("id")->on("land_offers")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("type_id")->references("id")->on("land_types")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_type');
    }
};
