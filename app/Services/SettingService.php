<?php

namespace App\Services;

use App\Models\Setting;
use Storage;

/**
 * Class SettingService.
 */
class SettingService
{

    public static function update($request)
    {
        $data = $request->validated();

        foreach ($data as $key => $value) {
            if (!$request->hasFile($key)) {
                Setting::updateOrCreate(
                    [
                        'key' => $key
                    ],
                    [
                        'value' => $value
                    ]
                );
            } else {
                $name = time() . "-" . $request->file($key)->getClientOriginalName();
                $image = $request->file($key)->storeAs("images/settings", $name, "public");

                $setting = Setting::where('key', $key)->firstOrNew();

                if ($setting->value)
                    Storage::disk("public")->delete($setting->value);

                Setting::updateOrCreate(
                    [
                        'key' => $key
                    ],
                    [
                        'value' => $image
                    ]
                );
            }
        }
    }
    public static function get($key)
    {
        $setting = Setting::where('key', $key)->firstOrNew();

        return $setting->value;
    }
}
