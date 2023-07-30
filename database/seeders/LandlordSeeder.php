<?php

namespace Database\Seeders;

use App\Models\Landlord;
use App\Models\User;
use App\Services\RoleService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LandlordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "Landlord Name",
            "phone" => "12345788",
            "email" => "landlord@gmail.com",
            "password" => Hash::make("password"),
            "is_active" => true,
        ]);

        $landlord = Landlord::create([
            "user_id" => $user->id,
        ]);




        RoleService::assignLandlordRole($user);
    }
}
