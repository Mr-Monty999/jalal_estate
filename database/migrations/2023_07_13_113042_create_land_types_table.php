<?php

use App\Services\LandTypeService;
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
        Schema::create('land_types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->boolean("status")->default(true);
            $table->softDeletes();
            $table->timestamps();
        });

        LandTypeService::createInitialData();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('land_types');
    }
};
