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
        Schema::table('land_offers', function (Blueprint $table) {
            $table->unsignedBigInteger("estate_classification_id");

            $table->foreign("estate_classification_id")->references("id")->on("estate_classifications")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('land_offers', function (Blueprint $table) {
            $table->dropColumn("");
        });
    }
};
