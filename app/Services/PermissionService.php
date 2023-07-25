<?php

namespace App\Services;

use Spatie\Permission\Models\Permission;

/**
 * Class PermissionService.
 */
class PermissionService
{

    public static function companyPermissions()
    {
        return [
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
        ];
    }
    public static function marketerPermissions()
    {
        return [
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
        ];
    }

    public static function officePermissions()
    {
        return [
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
        ];
    }

    public static function storePermissions($data)
    {
        foreach ($data as $key => $value) {
            Permission::firstOrCreate(["name" => $value]);
        }

        return $data;
    }
}
