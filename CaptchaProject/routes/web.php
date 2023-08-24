<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptchaController;
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
    return view('welcome');
});
// routes/web.php
Route::get('/', [CaptchaController::class,'index']);
Route::get('/reload-captcha', [CaptchaController::class,'reloadCaptcha']);
Route::post('/post', [CaptchaController::class,'post']);
Route::post('/add_comment', [CaptchaController::class,'add_comment']);
