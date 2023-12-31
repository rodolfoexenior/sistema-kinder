<?php

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/country/{country_id}', function ($country_id) {
    return City::where('country_id', $country_id)->get();
});

Route::get('/city/{city}', function ($city_id) {
    return Province::where('city_id', $city_id)->get();
});

Route::get('/hola', function () {
    return "Hola";
});