<?php

use App\Http\Controllers\User\AuctionBidController;
use App\Http\Controllers\User\AuctionController;
use App\Http\Controllers\User\ChatController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\CompanyController;
use App\Http\Controllers\User\ForgetPasswordController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\LandlordController;
use App\Http\Controllers\User\LandOfferController;
use App\Http\Controllers\User\MarketerController;
use App\Http\Controllers\User\OfficeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\RentController;
use App\Http\Controllers\User\ServiceProviderController;
use App\Http\Controllers\User\UserController;
use App\Models\Auction;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "user", "middleware" => [/*"user-permissions-updater"*/]], function () {

    Route::group(["middleware" => "guest"], function () {

        Route::get("/login", [LoginController::class, "index"])->name("user.login");
        Route::post("/login", [LoginController::class, "login"])->name("user.login.attempt");

        Route::get("/forget-password", [ForgetPasswordController::class, "index"])->name("user.forget-password");
        Route::post("/forget-password", [ForgetPasswordController::class, "postForgetPassword"])->name("user.forget-password.post");

        Route::post('/reset-password', [ForgetPasswordController::class, "postResetPassword"])->name('password.update');
        Route::get('/reset-password/{token}', [ForgetPasswordController::class, "resetPassword"])->name('password.reset');
    });


    Route::group(["middleware" => ["auth", "check-user-can-access-dashboard"]], function () {
        Route::get("/logout", [UserController::class, "logout"])->name("user.logout");

        Route::group(["middleware" => "check-if-user-is-active"], function () {
            Route::get("/", [HomeController::class, "index"])->name("user.home");

            Route::get("/profile", [ProfileController::class, "index"])->name("user.profile");
            Route::get("/notifications", [UserController::class, "getNotifications"])->name("user.notifications.index");
            Route::get("/chat", [ChatController::class, "index"])->name("user.chat.index");


            Route::put("/companies/profile", [CompanyController::class, "updateProfile"])->name("user.companies.profile.update");
            Route::put("/offices/profile", [OfficeController::class, "updateProfile"])->name("user.offices.profile.update");
            Route::put("/marketers/profile", [MarketerController::class, "updateProfile"])->name("user.marketers.profile.update");
            Route::put("/landlords/profile", [LandlordController::class, "updateProfile"])->name("user.landlords.profile.update");
            Route::put("/service-provider/profile", [ServiceProviderController::class, "updateProfile"])->name("user.service-providers.profile.update");



            Route::resource("land-offers", LandOfferController::class, ["as" => "user"]);
            Route::post("land-offers/{landOffer}/accept", [LandOfferController::class, "accept"])->name("user.land-offers.accept");
            Route::get("land-offers/{landOffer}/print", [LandOfferController::class, "print"])->name("user.land-offers.print");
            Route::get("land-offers/type/accepted", [LandOfferController::class, "acceptedOffers"])->name("user.accepted-offers");



            /// Chat //
            Route::group(["prefix" => "chat"], function () {
                Route::post("message/send", [ChatController::class, "sendMessage"])->name("user.chat.message.send");
                Route::get("open/{user}", [ChatController::class, "openChat"])->name("user.chat.open");
            });


            //// Rents ///
            Route::get("/rents", [RentController::class, "index"])->name("user.rents.index");
            Route::get("/rents/{rent}", [RentController::class, "show"])->name("user.rents.show");





            //// auctions ///
            Route::resource("auctions", AuctionController::class, ["as" => "user"]);
            Route::post("auctions/{auction}/bid", [AuctionBidController::class, "store"])->name("user.auctions.bid.store");
            Route::post("auctions/{auction}/end", [AuctionController::class, "end"])->name("user.auctions.end");
        });
    });
});
