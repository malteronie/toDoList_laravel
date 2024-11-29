<?php

use App\Http\Controllers\authController;
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
    return view('accueil');
});


Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login', [authController::class, 'doLogin']);

Route::delete('/logout', [authController::class, 'logout'])->name('logout');

Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register', [authController::class,'inscription']);