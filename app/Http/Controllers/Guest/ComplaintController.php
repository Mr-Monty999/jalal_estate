<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComplaintRequest;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view("guest.complaints.index", compact("user"));
    }



    public function store(StoreComplaintRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile("attachment")) {
            $name = time() . "-" . $request->file("attachment")->getClientOriginalName();
            $data["attachment"] = $request->file("attachment")->storeAs("attachments/complaints", $name, "public");
        }

        $complaint = Complaint::create($data);

        toastr()->success(trans('keywords.complaint sent successfully'));

        return back();
    }
}
