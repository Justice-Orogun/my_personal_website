<?php

use App\Http\Controllers\ContactController;
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


Route::get('/portfolio', function(){
    return view('portfolio');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact',[ContactController::class,'contact']);

Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');
    

Route::get('/', function () {
    return view('welcome');
});
