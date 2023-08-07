<?php

namespace App\Services;

use Crypt;

/**
 * Class EncyptionService.
 */
class EncryptionService
{


    public static function decryptRequestInputs($request)
    {

        foreach ($request->all() as $key => $value) {
            $request->merge([
                $key => decrypt($key)
            ]);
        }
    }
    public static function encryptRequestInputs($request)
    {

        foreach ($request->all() as $key => $value) {
            $request->merge([
                $key => encrypt($value)
            ]);
        }
    }
}
