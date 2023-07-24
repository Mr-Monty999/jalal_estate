<?php

use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\CompanyController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "user"], function () {

    Route::group(["middleware" => "guest"], function () {

        Route::get("/login", [LoginController::class, "index"])->name("user.login");
        Route::post("/login", [LoginController::class, "login"])->name("user.login.attempt");
    });


    Route::group(["middleware" => "auth"], function () {
        Route::get("/", [HomeController::class, "index"])->name("user.home");
        Route::get("/logout", [UserController::class, "logout"])->name("user.logout");

        Route::get("/profile", [ProfileController::class, "index"])->name("user.profile");
        Route::post("/profile", [ProfileController::class, "update"])->name("user.profile.update");
    });
});
