<?php

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

Route::get('/landing/', function () {
    return view('welcome');
});
