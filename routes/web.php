<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Auth
Route::get("/login",  [AuthController::class, "login"])->name("login");
Route::post("/login",  [AuthController::class, "authenticated"]);
Route::get("/logout",  [AuthController::class, "logout"]);

//Home
Route::get("/",  [HomeController::class, "index"]);
Route::get("/tentang",  [HomeController::class, "tentang"]);
Route::get("/tim",  [HomeController::class, "tim"]);
Route::get("/profil",  [HomeController::class, "profil"]);
Route::get("/kegiatan",  [HomeController::class, "kegiatan"]);
Route::get("/kontak",  [HomeController::class, "kontak"]);

//Dashboard
Route::get("/dashboard", [DashboardController::class,"index"])->middleware("auth");

Route::resource("sliders", SliderController::class)->middleware("auth");