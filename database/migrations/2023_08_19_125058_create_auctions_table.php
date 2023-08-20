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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("land_type_id");
            $table->unsignedBigInteger("estate_classification_id");
            $table->unsignedBigInteger("city_id");
            $table->unsignedBigInteger("neighbourhood_id");
            $table->string("name");
            $table->string("street");
            $table->string("video")->nullable();
            $table->double("price");
            $table->double("space");
            $table->string("north_border");
            $table->string("south_border");
            $table->string("east_border");
            $table->string("west_border");
            $table->bigInteger("instrument_number");
            $table->text("description")->nullable();
            $table->text("features")->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("land_type_id")->references("id")->on("land_types")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("estate_classification_id")->references("id")->on("estate_classifications")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("city_id")->references("id")->on("cities")->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('auctions');
    }
};
