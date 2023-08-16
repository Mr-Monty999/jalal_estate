<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use App\Services\SettingService;

class SettingController extends Controller
{

    public function termsAndConditions()
    {

        return view("admin.settings.terms-and-conditions");
    }

    public function update(UpdateSettingRequest $request)
    {

        SettingService::update($request);


        toastr()->success(trans('keywords.updated successfully'));


        return back();
    }

    public function aboutPage()
    {

        return view("admin.settings.about");
    }
    public function contactPage()
    {

        return view("admin.settings.contact");
    }
    public function footer()
    {

        return view("admin.settings.footer");
    }
}
