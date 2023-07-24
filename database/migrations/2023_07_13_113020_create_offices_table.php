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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("license_number")->unique();
            $table->bigInteger("advertiser_number")->unique();
            $table->unsignedBigInteger("user_id");
            $table->bigInteger("commercial_registration_number")->unique();
            $table->string("logo");
            $table->softDeletes();
            $table->timestamps();


            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
};
