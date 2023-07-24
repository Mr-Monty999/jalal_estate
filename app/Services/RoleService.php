<?php

namespace App\Services;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Class RoleService.
 */
class RoleService
{


    public static function assignRole($user)
    {
        $role = Role::firstOrCreate([
            "name" => "company"
        ]);

        $permission = PermissionService::storePermissions(PermissionService::companyPermissions());

        $role->syncPermissions(PermissionService::companyPermissions());

        $user->assignRole("company");

        return $user;
    }
}
