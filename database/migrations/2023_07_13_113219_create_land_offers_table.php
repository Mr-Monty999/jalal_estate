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
        Schema::create('land_offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("city_id");
            $table->unsignedBigInteger("neighbourhood_id");
            $table->unsignedBigInteger("land_type_id");
            $table->bigInteger("land_number");
            $table->string("street_name");
            $table->string("direction");
            $table->boolean("is_commercial");
            $table->string("street_width");
            $table->string("street_height");
            $table->string("dept");
            $table->string("space");
            $table->bigInteger("instrument_number");
            $table->string("photo");
            $table->string("operation_type");
            $table->string("type2");
            $table->string("adjective");
            // $table->bigInteger("marketing_certificate_number");
            $table->string("rent_period")->nullable();
            $table->text("contact_info");
            $table->integer("price");




            $table->softDeletes();
            $table->timestamps();


            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("neighbourhood_id")->references("id")->on("neighbourhoods")->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('land_offers');
    }
};
