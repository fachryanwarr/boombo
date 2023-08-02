<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\MovieController;
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
    return view('home', [
        "name" => "Fachry Anwar",
        "age" => 20,
        "title" => "home"
    ]);
});

Route::get('/movies/', [MovieController::class, 'index']);
Route::get('/movies/{movie:slug}', [MovieController::class, 'getOne']);

Route::get('/mybalance/', [BalanceController::class, 'getBalance'])->middleware('auth');

Route::get('/auth/sign-in/', [AuthController::class, 'signIn'])->name('login')->middleware('guest');
Route::post('/auth/sign-in/', [AuthController::class, 'authenticate']);

Route::get('/auth/register/', [AuthController::class, 'register'])->middleware('guest');
Route::post('/auth/register/', [AuthController::class, 'registerPost']);

Route::post('/auth/logout/', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/landing/', function () {
    return view('welcome');
});