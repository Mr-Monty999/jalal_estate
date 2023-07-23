<?php

use App\Http\Controllers\User\CompanyController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "user"], function () {
    Route::get("/companies/register", [CompanyController::class, "register"]);

    Route::resource("companies", CompanyController::class, ["as" => "user"]);
});
