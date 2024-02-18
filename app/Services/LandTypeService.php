<?php

namespace App\Services;

use App\Models\LandType;

/**
 * Class LandTypeService.
 */
class LandTypeService
{

    public static function store($request)
    {

        $data = $request->validated();

        $landType = LandType::create($data);

        return $landType;
    }

    public static function update($request, $landType)
    {

        $data = $request->validated();

        $landType->update($data);

        return $landType;
    }
    public static function createInitialData()
    {
        LandType::insert([
            [
                "name" => "أرض"
            ],
            [
                "name" => "فيلا"
            ],
            [
                "name" => "سكني"
            ],
            [
                "name" => "مستودع"
            ],
            [
                "name" => "مزرعة"
            ],
            [
                "name" => "كمباوند"
            ],
            [
                "name" => "مرفق"
            ],
            [
                "name" => "مصنع"
            ],
            [
                "name" => "ارض مصنع"
            ],
            [
                "name" => "شقة تمليك"
            ],
            [
                "name" => "دور تمليك"
            ],
            [
                "name" => "مكتب تمليك"
            ],
            [
                "name" => "فندق"
            ],
            [
                "name" => "شقق مفروشة"
            ],
            [
                "name" => "شقق إيجار"
            ],
            [
                "name" => "دور إيجار"
            ],
        ]);
    }
}
