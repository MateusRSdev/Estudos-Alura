<?php

use Illuminate\Http\Request;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\EpisodesController;

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

Route::get('/', function () {
    return redirect('/series');
})->middleware("autenticador");

Route::resource('/series', SeriesController::class)
    ->except(['show']);

Route::get("/series/{serie}/seasons",[SeasonsController::class,"index"])->name("seasons.index")->middleware("autenticador");

Route::get("/seasons/{season}/episodes",[EpisodesController::class,"index"])->name("episodes.index")->middleware("autenticador");
Route::post("/seasons/{season}/episodes",[EpisodesController::class, "update"])->name("episodes.update");

Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post("/login", [LoginController::class, "store"])->name("singIn");
Route::get("/logout", [LoginController::class, "destroy"])->name("logout");



Route::get("/register", [UsersController::class, "create"])->name("users.create");
Route::post("/register", [UsersController::class, "store"])->name("users.store");
