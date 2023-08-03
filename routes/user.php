<?php

use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\CompanyController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\LandlordController;
use App\Http\Controllers\User\LandOfferController;
use App\Http\Controllers\User\MarketerController;
use App\Http\Controllers\User\OfficeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\ServiceProviderController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "user"], function () {

    Route::group(["middleware" => "guest"], function () {

        Route::get("/login", [LoginController::class, "index"])->name("user.login");
        Route::post("/login", [LoginController::class, "login"])->name("user.login.attempt");
    });


    Route::group(["middleware" => ["auth", "can:access_user_dashboard"]], function () {
        Route::get("/logout", [UserController::class, "logout"])->name("user.logout");

        Route::group(["middleware" => "check-if-user-is-active"], function () {
            Route::get("/", [HomeController::class, "index"])->name("user.home");

            Route::get("/profile", [ProfileController::class, "index"])->name("user.profile");


            Route::put("/companies/profile", [CompanyController::class, "updateProfile"])->name("user.companies.profile.update");
            Route::put("/offices/profile", [OfficeController::class, "updateProfile"])->name("user.offices.profile.update");
            Route::put("/marketers/profile", [MarketerController::class, "updateProfile"])->name("user.marketers.profile.update");
            Route::put("/landlords/profile", [LandlordController::class, "updateProfile"])->name("user.landlords.profile.update");
            Route::put("/service-provider/profile", [ServiceProviderController::class, "updateProfile"])->name("user.service-provider.profile.update");



            Route::resource("land-offers", LandOfferController::class, ["as" => "user"]);
            Route::post("land-offers/{landOffer}/accept", [LandOfferController::class, "accept"])->name("user.land-offers.accept");
        });
    });
});
