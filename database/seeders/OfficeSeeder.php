<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Office;
use App\Models\User;
use App\Services\RoleService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "Office Name",
            "phone" => "12345717",
            "email" => "office@gmail.com",
            "password" => Hash::make("password"),
            "is_active" => true,
        ]);

        $office = Office::create([
            "user_id" => $user->id,
            "license_number" => 123,
            "advertiser_number" => 532,
            "commercial_registration_number" => 512
        ]);




        RoleService::assignOfficeRole($user);

        $city = City::get()->random()->first();
        $neighbourhood = $city->neighbourhoods()->get()->random()->first();

        $office->cities()->attach(
            $city->id,
            [
                "created_at" => now(),
                "updated_at" => now()
            ]
        );
        $office->neighbourhoods()->attach(
            $neighbourhood->id,
            [
                "created_at" => now(),
                "updated_at" => now()
            ]
        );
    }
}
