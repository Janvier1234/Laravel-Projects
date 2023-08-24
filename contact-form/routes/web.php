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

Route::get('/contact', function () {
return view('contactPage');
});
Route::post('/contact', function () {
    $data = request([
        'name', 'email', 'subject', 'message']);
    \Illuminate\Support\Facades\Mail::to('janvier@techaffinity.com') 
      ->send(new \App\Mail\ContactMe($data));
    return redirect('/contact')
      ->with('flash', 'Message Snt Succefuly');
    });
// use App\Http\Controllers\PagesController;

// Route::get('/contact ', [PagesController::class, 'index']);
// Route::get('/contact', [PagesController::class, 'showContact'])->name('contact.show');
// Route::post('/contact', [PagesController::class, 'submitContactForm'])->name('contact.submit');
 