<?php

use Illuminate\Http\Request;

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


Route::resource("/songs", "SongController", ["only" => ["index", "store", "update", "destroy"]]);

Route::post("/register", "UserController@register");
Route::post("/me", "UserController@me")->middleware("auth:api");