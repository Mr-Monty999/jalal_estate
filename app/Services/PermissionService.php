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
            "access_user_dashboard",
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
            "accept_offers",
        ];
    }
    public static function marketerPermissions()
    {
        return [
            "access_user_dashboard",
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
            "accept_offers",
        ];
    }

    public static function officePermissions()
    {
        return [
            "access_user_dashboard",
            "view_offers",
            "create_offers",
            "edit_offers",
            "delete_offers",
            "accept_offers",
        ];
    }

    public static function landlordPermissions()
    {
        return [
            "access_user_dashboard",
            // "view_offers",
            // "create_offers",
            // "edit_offers",
            // "delete_offers",
            // "accept_offers",
        ];
    }


    public static function serviceProviderPermissions()
    {
        return [
            "access_user_dashboard",
            // "view_offers",
            // "create_offers",
            // "edit_offers",
            // "delete_offers",
            // "accept_offers",
        ];
    }

    public static function adminPermissions()
    {
        return [
            "access_admin_dashboard",
            "view_cities",
            "create_cities",
            "edit_cities",
            "delete_cities",
            "view_neighbourhoods",
            "create_neighbourhoods",
            "edit_neighbourhoods",
            "delete_neighbourhoods",
            "view_users"

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
