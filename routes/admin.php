

<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Guest\LoginController;
use Illuminate\Support\Facades\Route;


Route::group(["prefix" => "admin"], function () {

    Route::group(["middleware" => "admin-guest"], function () {
        Route::get("/login", [AuthController::class, "loginPage"])->name("admin.login");
        Route::post("/login", [AuthController::class, "loginAttempt"])->name("admin.login.attempt");
    });

    Route::group(["middleware" => ["admin-auth", "can:view_admin_dashboard"]], function () {
        Route::get("/", [HomeController::class, "index"])->name("admin.home");
    });
});
