

<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\NeighbourhoodController;
use App\Http\Controllers\Guest\LoginController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(["prefix" => "admin"], function () {

    Route::group(["middleware" => "admin-guest"], function () {
        Route::get("/login", [AuthController::class, "loginPage"])->name("admin.login");
        Route::post("/login", [AuthController::class, "loginAttempt"])->name("admin.login.attempt");
    });

    Route::group(["middleware" => ["admin-auth", "can:access_admin_dashboard"]], function () {
        Route::get("/", [HomeController::class, "index"])->name("admin.home");

        Route::get("/logout", [AuthController::class, "logout"])->name("admin.logout");


        Route::resource("cities", CityController::class, ["as" => "admin"]);

        Route::resource("neighbourhoods", NeighbourhoodController::class, ["as" => "admin"]);

        Route::get('/users/all', [UserController::class, "index"])->name("admin.users.all");
        Route::post('/users/{user}/active', [UserController::class, "active"])->name("admin.users.active");
        Route::post('/users/{user}/deactive', [UserController::class, "deactive"])->name("admin.users.deactive");
    });
});
