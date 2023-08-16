<?php

use App\Services\EstateClassificationService;
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
        Schema::create('estate_classifications', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("color")->nullable();
            $table->boolean("active_setting_1")->default(0);
            $table->boolean("status")->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
        EstateClassificationService::createInitialData();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estate_classifications');
    }
};
