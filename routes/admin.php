

<?php

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CityBannerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ComplaintController;
use App\Http\Controllers\Admin\EstateClassificationController;
use App\Http\Controllers\Admin\EstateOfferController;
use App\Http\Controllers\Admin\LandTypeController;
use App\Http\Controllers\Admin\NeighbourhoodController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\RentController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Guest\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;


Route::group(["prefix" => "admin"], function () {

    // Route::group(["middleware" => "admin-guest"], function () {
    //     Route::get("/login", [AuthController::class, "loginPage"])->name("admin.login");
    //     Route::post("/login", [AuthController::class, "loginAttempt"])->name("admin.login.attempt");
    // });

    Route::group(["middleware" => ["auth", "check-admin-can-access-dashboard"]], function () {
        Route::get("/logout", [AuthController::class, "logout"])->name("admin.logout");


        Route::group(["middleware" => ["check-if-admin-is-active"]], function () {



            Route::get("/", [HomeController::class, "index"])->name("admin.home");


            Route::get("/profile", [AdminProfileController::class, "index"])->name("admin.profile.index");
            Route::put("/profile", [AdminProfileController::class, "updateProfile"])->name("admin.profile.update");


            Route::resource("cities", CityController::class, ["as" => "admin"]);

            Route::resource("neighbourhoods", NeighbourhoodController::class, ["as" => "admin"]);

            Route::get('/users/all', [UserController::class, "all"])->name("admin.users.all");
            Route::get('/users/all/active', [UserController::class, "allActive"])->name("admin.users.active.all");
            Route::get('/users/all/unactive', [UserController::class, "allUnActive"])->name("admin.users.unactive.all");
            Route::get('/users/all/blocked', [UserController::class, "allBlocked"])->name("admin.users.blocked.all");

            Route::post('/users/{user}/active', [UserController::class, "active"])->name("admin.users.active");
            Route::post('/users/{user}/deactive', [UserController::class, "deactive"])->name("admin.users.deactive");
            Route::post('/users/block', [UserController::class, "block"])->name("admin.users.block");
            Route::post('/users/{user}/unblock', [UserController::class, "unblock"])->name("admin.users.unblock");



            Route::resource("ads", AdController::class, ["as" => "admin"]);

            Route::get('/settings/terms-and-conditions', [SettingController::class, "termsAndConditions"])->name("admin.terms-and-conditions.index");
            Route::get('/settings/about-page', [SettingController::class, "aboutPage"])->name("admin.about-page.index");
            Route::get('/settings/contact-page', [SettingController::class, "contactPage"])->name("admin.contact-page.index");
            Route::get('/settings/footer', [SettingController::class, "footer"])->name("admin.footer.index");

            Route::put('/settings', [SettingController::class, "update"])->name("admin.settings.update");

            Route::resource("rents", RentController::class, ["as" => "admin"]);


            //// Land Types ////

            Route::resource("land-types", LandTypeController::class, ["as" => "admin"]);

            // estate classifications //
            Route::resource("estate-classifications", EstateClassificationController::class, ["as" => "admin"]);


            // city banners //
            Route::resource("cities-banners", CityBannerController::class, ["as" => "admin"]);



            // admins //
            Route::resource("admins", AdminController::class, ["as" => "admin"]);

            // roles //
            Route::resource("roles", RoleController::class, ["as" => "admin"]);

            /// complaints ///
            Route::get("/complaints/open", [ComplaintController::class, "openComplaints"])->name("admin.complaints.list.open");
            Route::get("/complaints/closed", [ComplaintController::class, "closedComplaints"])->name("admin.complaints.list.closed");
            Route::post("/complaints/{complaint}/close", [ComplaintController::class, "closeComplaint"])->name("admin.complaints.close");


            /// Estate Offers ///
            Route::get("/estate-offers", [EstateOfferController::class, "index"])->name("admin.estate-offers.index");
        });
    });
});
