<?php

use App\Http\Controllers\Guest\CompanyController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/test", function () {
    return view("guest.rents.index");
});
