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
            "view_users",
            "view_ads",
            "create_ads",
            "edit_ads",
            "delete_ads",
            "view_settings",
            "view_rents",
            "create_rents",
            "edit_rents",
            "delete_rents",
            "view_land_types",
            "create_land_types",
            "edit_land_types",
            "delete_land_types",
            "view_estate_classifications",
            "create_estate_classifications",
            "edit_estate_classifications",
            "delete_estate_classifications",
            "view_cities_banners",
            "create_cities_banners",
            "edit_cities_banners",
            "delete_cities_banners",


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
