<?php

namespace App\Services;

use App\Models\EstateClassification;

/**
 * Class EstateClassificationService.
 */
class EstateClassificationService
{

    public static function store($request)
    {
        $data = $request->validated();
        if ($request->active_setting_1 == "on")
            $data["active_setting_1"] = true;
        else
            $data["active_setting_1"] = false;

        $estateClassification = EstateClassification::create($data);

        return $estateClassification;
    }

    public static function update($request, $estateClassification)
    {

        $data = $request->validated();

        if ($request->active_setting_1 == "on")
            $data["active_setting_1"] = true;
        else
            $data["active_setting_1"] = false;

        $estateClassification->update($data);

        return $estateClassification;
    }

    public static function createInitialData()
    {
        EstateClassification::insert([
            [
                "name" => "سكني",
                "color" => "#ffc107",
                "active_setting_1" => true,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "تجاري",
                "color" => "#198754",
                "active_setting_1" => false,
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "name" => "مستودع",
                "color" => "#0dcaf0",
                "active_setting_1" => false,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "مرفق",
                "color" => "#6610f2",
                "active_setting_1" => false,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ورشة",
                "color" => "#6610f2",
                "active_setting_1" => false,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "صناعي",
                "color" => "#6610f2",
                "active_setting_1" => false,
                "created_at" => now(),
                "updated_at" => now()
            ],

        ]);
    }
}
