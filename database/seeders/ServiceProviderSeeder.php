<?php

namespace Database\Seeders;

use App\Models\ServiceProvider;
use App\Models\User;
use App\Services\RoleService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ServiceProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "Service Provider Name",
            "phone" => "12345727",
            "email" => "provider@gmail.com",
            "password" => Hash::make("password"),
            "is_active" => true,
        ]);

        $office = ServiceProvider::create([
            "user_id" => $user->id,
            // "license_number" => 123,
            // "advertiser_number" => 532,
            // "commercial_registration_number" => 512
        ]);




        RoleService::assignServiceProviderRole($user);
    }
}
