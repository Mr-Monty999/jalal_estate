<?php

use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("cities/{cityId}/neighbourhoods", [CityController::class, "getNeighbourhoods"]);
Route::get("users/{userId}/notifications-count", [UserController::class, "getNotificationsCount"]);
Route::post("users/read-notifications", [UserController::class, "readNotifications"]);



//// Chat Api ////
// Route::group(["prefix" => "chat"], function () {
//     Route::post("message/send", [ChatController::class, "sendMessage"]);
// });
