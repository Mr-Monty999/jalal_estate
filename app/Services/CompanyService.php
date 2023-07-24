<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Support\Facades\Storage;

/**
 * Class CompanyService.
 */
class CompanyService
{

    public static function store($request, $userId)
    {
        $data = $request->validated();
        $data["user_id"] = $userId;

        if ($request->hasFile("logo")) {
            $name = time() . "-" . $request->file("logo")->getClientOriginalName();
            $data["logo"] = $request->file("logo")->storeAs("images/companies", $name, "public");

            // if ($company->logo)
            //     Storage::disk("public")->delete($company->logo);
        }
        $company = Company::create($data);


        return $company;
    }
}
