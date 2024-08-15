<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisasterController;
use App\Http\Controllers\PollutionController;

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
    return view('dashboard');
});

Route::get("/front/pollution", [PollutionController::class, 'pollution']);
Route::get("/front/disaster", [DisasterController::class, 'Disaster']);

Route::get("waterdata", [PollutionController::class, 'waterdata']);
Route::get("airdata", [PollutionController::class, 'airdata']);
