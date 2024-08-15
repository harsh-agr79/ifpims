<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PollutionController;
use App\Http\Controllers\DisasterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/pollution/add', [PollutionController::class, 'addData']);
Route::post('/disaster/add', [DisasterController::class, 'addData']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
