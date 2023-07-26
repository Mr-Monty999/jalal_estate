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
            "view_user_dashboard",
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
        ];
    }
    public static function marketerPermissions()
    {
        return [
            "view_user_dashboard",
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
        ];
    }

    public static function officePermissions()
    {
        return [
            "view_user_dashboard",
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
        ];
    }

    public static function landlordPermissions()
    {
        return [
            "view_user_dashboard",
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
        ];
    }


    public static function serviceProviderPermissions()
    {
        return [
            "view_user_dashboard",
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
        ];
    }

    public static function adminPermissions()
    {
        return [
            "view_admin_dashboard",
            "view_cities",
            "create_cities",
            "edit_cities",
            "delete_cities"
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
