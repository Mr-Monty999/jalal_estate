<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComplaintRequest;
use App\Http\Requests\UpdateComplaintRequest;
use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComplaintController extends Controller
{

    public function __construct()
    {

        $this->middleware("can:complaints");
    }
    public function openComplaints(Request $request)
    {

        $search = $request->search;

        $complaints = Complaint::with("user")
            ->where("status", "open")
            ->where(function ($q) use ($search) {
                $q->where("id", "LIKE", "%$search%")
                    ->orWhereHas("user", function ($q) use ($search) {
                        $q->where("phone", "LIKE", "%$search%")
                            ->orWhere("email", "LIKE", "%$search%")
                            ->orWhere("name", "LIKE", "%$search%");
                    });
            })
            ->latest()
            ->paginate(10);

        return view("admin.complaints.open", compact("complaints"));
    }

    public function closedComplaints(Request $request)
    {

        $search = $request->search;

        $complaints = Complaint::with("user")
            ->where("status", "closed")
            ->where(function ($q) use ($search) {
                $q->where("id", "LIKE", "%$search%")
                    ->orWhereHas("user", function ($q) use ($search) {
                        $q->where("phone", "LIKE", "%$search%")
                            ->orWhere("email", "LIKE", "%$search%")
                            ->orWhere("name", "LIKE", "%$search%");
                    });
            })
            ->latest()
            ->paginate(10);


        return view("admin.complaints.closed", compact("complaints"));
    }

    public function closeComplaint(Request $request, Complaint $complaint)
    {

        $complaint->update(
            ["status" => "closed"]
        );
        toastr()->success(trans("keywords.closed successfully"));

        return back();
    }
    public function openComplaint(Request $request, Complaint $complaint)
    {


        $complaint->update(
            ["status" => "open"]
        );

        toastr()->success(trans("keywords.opened successfully"));

        return back();
    }
}
