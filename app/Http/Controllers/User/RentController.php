<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $rents = Rent::latest()->paginate(10);
        return view("user.rents.index", compact("rents", 'user'));
    }

    public function show(Rent $rent)
    {
        $user = auth()->user();
        $relatedRents = Rent::where("id", "!=", $rent->id)
            ->where(function ($q) use ($rent) {
                $q->where("price", "<=", $rent->price)
                    ->orWhere("rent_period", "=", $rent->rent_period)
                    ->orWhere("location", "LIKE", "%$rent->location%");
            })
            ->latest()
            ->paginate(10);
        $rent->load("images");


        return view("user.rents.show", compact("user", "rent", "relatedRents"));
    }
}
