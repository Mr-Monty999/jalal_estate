<?php

use App\Http\Controllers\Guest\CompanyController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\LoginController;
use App\Http\Controllers\Guest\MarketerController;
use Illuminate\Support\Facades\Route;



Route::group([], function () {

    Route::get("/", [HomeController::class, 'index'])->name("guest.home");

    Route::group(["middleware" => "guest"], function () {
        Route::get("/companies/register", [CompanyController::class, "index"])->name("guest.companies.register");
        Route::post("/companies/register", [CompanyController::class, "register"])->name("guest.companies.register.post");

        Route::get("/marketers/register", [MarketerController::class, "index"])->name("guest.marketers.register");
        Route::post("/marketers/register", [MarketerController::class, "register"])->name("guest.marketers.register.post");
    });
});
