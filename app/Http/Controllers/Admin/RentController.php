<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRentRequest;
use App\Http\Requests\UpdateRentRequest;
use App\Models\Rent;
use App\Services\RentService;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = Rent::paginate(10);
        $user = auth()->user();


        return view("admin.rents.index", compact("rents", "user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view("admin.rents.create", compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRentRequest $request)
    {

        // dd($request->all());
        RentService::store($request);


        toastr()->success(trans('keywords.Added Successfully'));

        return redirect()->route("admin.rents.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {

        $rent->load([
            "images" => function ($query) {
                $query->limit(6);
            }
        ]);
        return view("admin.rents.edit", compact("rent"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRentRequest  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRentRequest $request, Rent $rent)
    {

        // dd($request->all());

        RentService::update($request, $rent);
        toastr()->success(trans('keywords.Updated Successfully'));
        return redirect()->route("admin.rents.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        $rent->delete();

        toastr()->success(trans('keywords.deleted successfully'));
        return response()->json();
    }
}
