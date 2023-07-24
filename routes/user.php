<?php

use App\Http\Controllers\User\CompanyController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "user"], function () {
    Route::get("/companies/register", [CompanyController::class, "register"])->name("user.companies.register");
    Route::post("/companies/register", [CompanyController::class, "postRegister"])->name("user.companies.register.post");
});
