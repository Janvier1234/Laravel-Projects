<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

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

// routes/web.php
// use App\Http\Controllers\JsonController;

// Route::get('/read-json', [JsonController::class, 'readJson']);

Route::get('/read-json', [WeatherController::class,'readJson']);
