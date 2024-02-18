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

    public static function assignLandlordRole($user)
    {
        $role = Role::firstOrCreate([
            "name" => "landlord"
        ]);

        $permission = PermissionService::storePermissions(PermissionService::landlordPermissions());

        $role->syncPermissions(PermissionService::landlordPermissions());

        $user->assignRole("landlord");

        return $user;
    }

    public static function assignServiceProviderRole($user)
    {
        $role = Role::firstOrCreate([
            "name" => "service-provider"
        ]);

        $permission = PermissionService::storePermissions(PermissionService::serviceProviderPermissions());

        $role->syncPermissions(PermissionService::serviceProviderPermissions());

        $user->assignRole("service-provider");

        return $user;
    }

    public static function assignSuperAdminRole($user)
    {
        $role = Role::firstOrCreate([
            "name" => "Super Admin"
        ]);

        $permission = PermissionService::storePermissions(PermissionService::AdminPermissions());

        $role->syncPermissions(PermissionService::AdminPermissions());

        $user->assignRole($role->name);

        return $user;
    }

    public static function store($request)
    {
        $data = $request->validated();

        $role = Role::firstOrCreate([
            "name" => $request->name
        ]);


        $role->syncPermissions($request->permissions);

        return $role;
    }

    public static function update($request, $role)
    {
        $data = $request->validated();

        $role->update([
            "name" => $request->name
        ]);

        $role->syncPermissions($request->permissions);


        return $role;
    }

    public static function systemRoles()
    {
        return [
            "Super Admin",
            "company",
            "marketer",
            "office",
            "landlord",
            "service-provider"
        ];
    }
}
