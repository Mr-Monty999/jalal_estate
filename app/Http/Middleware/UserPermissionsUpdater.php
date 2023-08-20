<?php

namespace App\Http\Middleware;

use App\Services\PermissionService;
use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserPermissionsUpdater
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


        PermissionService::storePermissions(PermissionService::companyPermissions());
        PermissionService::storePermissions(PermissionService::marketerPermissions());
        PermissionService::storePermissions(PermissionService::officePermissions());
        PermissionService::storePermissions(PermissionService::serviceProviderPermissions());
        PermissionService::storePermissions(PermissionService::landlordPermissions());

        ///////////////////

        $role = Role::firstOrCreate([
            "name" => "company"
        ]);
        $role->syncPermissions(PermissionService::companyPermissions());


        ///////////////////

        $role = Role::firstOrCreate([
            "name" => "marketer"
        ]);
        $role->syncPermissions(PermissionService::marketerPermissions());


        ///////////////////
        $role = Role::firstOrCreate([
            "name" => "office"
        ]);
        $role->syncPermissions(PermissionService::officePermissions());


        ///////////////////

        $role = Role::firstOrCreate([
            "name" => "service-provider"
        ]);
        $role->syncPermissions(PermissionService::serviceProviderPermissions());


        ///////////////////

        $role = Role::firstOrCreate([
            "name" => "landlord"
        ]);
        $role->syncPermissions(PermissionService::landlordPermissions());


        return $next($request);
    }
}
