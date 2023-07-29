<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        toastr()->success(trans('keywords.Logged In Successfully'));
        return view("user.home.index");
    }
}
