<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComplaintRequest;
use App\Http\Requests\UpdateComplaintRequest;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view("user.complaints.index", compact("user"));
    }



    public function store(StoreComplaintRequest $request)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->id();

        if ($request->hasFile("attachment")) {
            $name = time() . "-" . $request->file("attachment")->getClientOriginalName();
            $data["attachment"] = $request->file("attachment")->storeAs("attachments/complaints", $name, "public");
        }

        $complaint = Complaint::create($data);

        toastr()->success(trans('keywords.complaint sent successfully'));

        return redirect()->route("user.complaints.index");
    }
}
