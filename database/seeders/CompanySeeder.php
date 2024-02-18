<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Company;
use App\Models\User;
use App\Services\RoleService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "Company Name",
            "phone" => "12345787",
            "email" => "company@gmail.com",
            "password" => Hash::make("password"),
            "is_active" => true,
        ]);

        $company = Company::create([
            "user_id" => $user->id,
            "license_number" => 123,
            "advertiser_number" => 532,
            "commercial_registration_number" => 512
        ]);





        RoleService::assignCompanyRole($user);

        $city = City::get()->random()->first();
        $neighbourhood = $city->neighbourhoods()->get()->random()->first();

        $company->cities()->attach(
            $city->id,
            [
                "created_at" => now(),
                "updated_at" => now()
            ]
        );
        $company->neighbourhoods()->attach(
            $neighbourhood->id,
            [
                "created_at" => now(),
                "updated_at" => now()
            ]
        );
    }
}
