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

        return view("user.rents.show", compact("user", "rent"));
    }
}
