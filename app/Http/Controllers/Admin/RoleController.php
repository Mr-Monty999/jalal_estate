<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Services\PermissionService;
use App\Services\RoleService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:view_roles")->only(["index", "show"]);
        $this->middleware("can:edit_roles")->only(["edit", "update"]);
        $this->middleware("can:create_roles")->only(["create", "store"]);
        $this->middleware("can:delete_roles")->only(["destroy"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::whereNotIn("name", RoleService::systemRoles())->paginate(10);
        PermissionService::storePermissions(PermissionService::adminPermissions());

        $permissions = PermissionService::adminPermissions();

        return view("admin.roles.index", compact("roles", "permissions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $permissions = PermissionService::adminPermissions();


        return view("admin.roles.create", compact("permissions"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        RoleService::store($request);


        toastr()->success(trans("keywords.Added Successfully"));

        return redirect()->route("admin.roles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {

        $permissions = PermissionService::adminPermissions();
        $rolePermissions = $role->permissions()->pluck("name")->toArray();


        return view("admin.roles.edit", compact("role", "permissions", "rolePermissions"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {

        if (in_array($role->name, RoleService::systemRoles()))
            abort(403);

        RoleService::update($request, $role);


        toastr()->success(trans("keywords.updated successfully"));

        return redirect()->route("admin.roles.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if (in_array($role->name, RoleService::systemRoles()))
            abort(403);

        $role->delete();

        toastr()->success(trans("keywords.deleted successfully"));

        return response()->json();
    }
}
