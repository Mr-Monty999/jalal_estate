<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Services\SettingService;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index()
    {
        $termsAndConditions = SettingService::get('terms_and_conditions');
        return view("guest.terms-and-conditions.index", compact("termsAndConditions"));
    }
}
