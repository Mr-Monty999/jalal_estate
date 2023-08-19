<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Ad;
use App\Models\Admin;
use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware("can:view_admins")->only(["index", "show"]);
        $this->middleware("can:edit_admins")->only(["edit", "update"]);
        $this->middleware("can:create_admins")->only(["create", "store"]);
        $this->middleware("can:delete_admins")->only(["destroy"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::latest()->paginate(10);
        return view("admin.admins.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.admins.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        AdminService::store($request);

        toastr()->success(trans("keywords.Added Successfully"));

        return redirect()->route("admin.admins.index");
    }

    /**
     * Display the specified resource.
     *
     * @param    Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view("admin.admins.edit", compact("admin"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param    Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        AdminService::update($request, $admin);

        toastr()->success(trans("keywords.updated successfully"));
        return view("admin.admins.index", $admin);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        toastr()->success(trans("keywords.destroy successfully"));

        return response()->json();
    }
}
