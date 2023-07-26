<?php

use App\Models\Admin;
use App\Models\User;
use App\Services\RoleService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("photo")->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
        });

        $user =  User::create([
            "name" => "admin",
            "phone" => "12345678",
            "email" => "admin@admin.com",
            "is_active" => true,
            "password" => Hash::make("password")

        ]);

        $admin = Admin::create([
            "user_id" => $user->id
        ]);

        RoleService::assignAdminRole($user);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
