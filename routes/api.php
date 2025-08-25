<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PollutionController;
use App\Http\Controllers\DisasterController;

Route::post('/disaster/add', [DisasterController::class, 'addData']);
Route::post('/pollution/add', [PollutionController::class, 'addData']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
