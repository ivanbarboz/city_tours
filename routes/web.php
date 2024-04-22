<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Route::view('login', "login")->name('login');

Route::view('/principal',"auth.principal")->name('principal')->middleware('auth');

Route::view('register', "register")->name('register');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/region', [RegionController::class, 'store']);
Route::get('/region', [RegionController::class, 'index']);


Route::post('register', [UserController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);
