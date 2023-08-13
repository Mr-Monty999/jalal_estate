<?php

namespace App\Services;

use App\Models\Setting;

/**
 * Class SettingService.
 */
class SettingService
{

    public static function update($request)
    {
        $data = $request->validated();

        foreach ($data as $key => $value) {
            // if ($value)
            Setting::updateOrCreate(
                [
                    'key' => $key
                ],
                [
                    'value' => $value
                ]
            );
        }
    }
    public static function get($key)
    {
        $setting = Setting::where('key', $key)->firstOrNew();

        return $setting->value;
    }
}
