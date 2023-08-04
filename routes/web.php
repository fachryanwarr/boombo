<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;


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
        "title" => "home",
        "movies" => Movie::all(),
    ]);
});

Route::get('/movies/', [MovieController::class, 'index']);
Route::get('/movies/{movie:slug}', [MovieController::class, 'getOne']);
Route::get('/movies/choose-datetime/{movie:slug}', [MovieController::class, 'chooseDatetime'])->middleware('auth');
Route::post('/movies/choose-datetime/{movie:slug}', [MovieController::class, 'dateTimeStore'])->middleware('auth');
Route::get('/movies/choose-seats/{movie:slug}', [MovieController::class, 'chooseSeats'])->middleware('auth');
Route::post('/movies/choose-seats/{movie:slug}', [MovieController::class, 'seatsStore'])->middleware('auth');
Route::get('/movies/purchase-summary/{movie:slug}', [MovieController::class, 'getSummary'])->middleware('auth');
Route::post('/movies/purchase-summary/{movie:slug}', [MovieController::class, 'checkout'])->middleware('auth');

Route::get('/mybalance/', [BalanceController::class, 'getBalance'])->middleware('auth');
Route::get('/mybalance/topup', [BalanceController::class, 'topup'])->middleware('auth');
Route::post('/mybalance/topup', [BalanceController::class, 'topupStore'])->middleware('auth');
Route::get('/mybalance/withdraw', [BalanceController::class, 'withdraw'])->middleware('auth');
Route::post('/mybalance/withdraw', [BalanceController::class, 'withdrawStore'])->middleware('auth');

Route::get('/auth/sign-in/', [AuthController::class, 'signIn'])->name('login')->middleware('guest');
Route::post('/auth/sign-in/', [AuthController::class, 'authenticate'])->middleware('guest');

Route::get('/auth/register/', [AuthController::class, 'register'])->middleware('guest');
Route::post('/auth/register/', [AuthController::class, 'registerPost'])->middleware('guest');

Route::post('/auth/logout/', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/myticket/', [MovieController::class, 'getMyTicket'])->middleware('auth');

Route::get('/landing/', function () {
    return view('welcome');
});