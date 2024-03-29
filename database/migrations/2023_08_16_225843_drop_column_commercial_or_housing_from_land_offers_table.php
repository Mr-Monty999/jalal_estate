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
            $table->dropColumn("commercial_or_housing");
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
            $table->string("commercial_or_housing")->after("direction");
        });
    }
};
