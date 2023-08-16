

<?php

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\NeighbourhoodController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\RentController;
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
        Route::get("/", [HomeController::class, "index"])->name("admin.home");

        Route::get("/logout", [AuthController::class, "logout"])->name("admin.logout");

        Route::get("/profile", [AdminProfileController::class, "index"])->name("admin.profile.index");
        Route::put("/profile", [AdminProfileController::class, "updateProfile"])->name("admin.profile.update");


        Route::resource("cities", CityController::class, ["as" => "admin"]);

        Route::resource("neighbourhoods", NeighbourhoodController::class, ["as" => "admin"]);

        Route::get('/users/all', [UserController::class, "all"])->name("admin.users.all");
        Route::get('/users/all/active', [UserController::class, "allActive"])->name("admin.users.active.all");
        Route::get('/users/all/unactive', [UserController::class, "allUnActive"])->name("admin.users.unactive.all");

        Route::post('/users/{user}/active', [UserController::class, "active"])->name("admin.users.active");
        Route::post('/users/{user}/deactive', [UserController::class, "deactive"])->name("admin.users.deactive");



        Route::resource("ads", AdController::class, ["as" => "admin"]);

        Route::get('/settings/terms-and-conditions', [SettingController::class, "termsAndConditions"])->name("admin.terms-and-conditions.index");
        Route::get('/settings/about-page', [SettingController::class, "aboutPage"])->name("admin.about-page.index");
        Route::get('/settings/contact', [SettingController::class, "contactPage"])->name("admin.contact.index");
        Route::get('/settings/footer', [SettingController::class, "footerPage"])->name("admin.footer.index");

        Route::put('/settings', [SettingController::class, "update"])->name("admin.settings.update");

        Route::resource("rents", RentController::class, ["as" => "admin"]);
    });
});
