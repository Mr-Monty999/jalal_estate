<?php

namespace App\Services;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Class RoleService.
 */
class RoleService
{


    public static function assignCompanyRole($user)
    {
        $role = Role::firstOrCreate([
            "name" => "company"
        ]);

        $permission = PermissionService::storePermissions(PermissionService::companyPermissions());

        $role->syncPermissions(PermissionService::companyPermissions());

        $user->assignRole("company");

        return $user;
    }
    public static function assignMarketerRole($user)
    {
        $role = Role::firstOrCreate([
            "name" => "marketer"
        ]);

        $permission = PermissionService::storePermissions(PermissionService::marketerPermissions());

        $role->syncPermissions(PermissionService::marketerPermissions());

        $user->assignRole("marketer");

        return $user;
    }

    public static function assignOfficeRole($user)
    {
        $role = Role::firstOrCreate([
            "name" => "office"
        ]);

        $permission = PermissionService::storePermissions(PermissionService::officePermissions());

        $role->syncPermissions(PermissionService::officePermissions());

        $user->assignRole("office");

        return $user;
    }
}
