<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

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

Route::get('/', [BlogPostController::class, 'index'])->name('blog.index');
Route::get('/post/create', [BlogPostController::class, 'create'])->name('blog.create');
Route::post('/post', [BlogPostController::class, 'store'])->name('blog.store');
Route::get('/post/{id}', [BlogPostController::class, 'show'])->name('blog.show');
