<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'checkRole:admin'])->group(function () {
    Route::apiResource('transactions', TransactionController::class);
    
    Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
    });
