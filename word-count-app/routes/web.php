<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordCountController;

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
Route::get('/word-count',[WordCountController::class,'countWords'])->name('word.count');
