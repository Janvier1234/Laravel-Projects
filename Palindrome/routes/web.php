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
// web.php

use App\Http\Controllers\PalindromeController;

Route::get('/palindrome', [PalindromeController::class, 'index']);
Route::post('/check-palindrome', [PalindromeController::class, 'checkPalindrome'])->name('checkPalindrome');
