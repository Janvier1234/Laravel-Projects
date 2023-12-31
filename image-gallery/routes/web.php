<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/gallery', function () {
    $images = scandir(public_path('images'));
    $images = array_diff($images, ['.', '..']); // Remove "." and ".." from the list
    return view('gallery', compact('images'));
});
