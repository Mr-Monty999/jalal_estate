<?php

use App\Http\Controllers\Guest\AboutController;
use App\Http\Controllers\Guest\CompanyController;
use App\Http\Controllers\Guest\ContactController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\LandlordController;
use App\Http\Controllers\Guest\LoginController;
use App\Http\Controllers\Guest\MarketerController;
use App\Http\Controllers\Guest\OfficeController;
use App\Http\Controllers\Guest\ServiceProviderController;
use App\Http\Controllers\Guest\TermController;
use Illuminate\Support\Facades\Route;



Route::group([], function () {

    Route::get("/", [HomeController::class, 'index'])->name("guest.home");
    Route::get("/terms-and-conditions", [TermController::class, "index"])->name("guest.terms.index");
    Route::get("/about-us", [AboutController::class, "index"])->name("guest.about.index");
    Route::get("/contact-us", [ContactController::class, "index"])->name("guest.contact.index");


    Route::group(["middleware" => "guest"], function () {
        Route::get("/companies/register", [CompanyController::class, "index"])->name("guest.companies.register");
        Route::post("/companies/register", [CompanyController::class, "register"])->name("guest.companies.register.post");

        Route::get("/marketers/register", [MarketerController::class, "index"])->name("guest.marketers.register");
        Route::post("/marketers/register", [MarketerController::class, "register"])->name("guest.marketers.register.post");

        Route::get("/offices/register", [OfficeController::class, "index"])->name("guest.offices.register");
        Route::post("/offices/register", [OfficeController::class, "register"])->name("guest.offices.register.post");

        Route::get("/landlords/register", [LandlordController::class, "index"])->name("guest.landlords.register");
        Route::post("/landlords/register", [LandlordController::class, "register"])->name("guest.landlords.register.post");

        Route::get("/service-providers/register", [ServiceProviderController::class, "index"])->name("guest.service-providers.register");
        Route::post("/service-providers/register", [ServiceProviderController::class, "register"])->name("guest.service-providers.register.post");
    });
});
