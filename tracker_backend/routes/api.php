<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;

// Sanctum routes
Route::middleware('auth:sanctum')->group(function () {
    // Budget routes
    Route::apiResource('budgets', BudgetController::class);

    // Transaction routes
    Route::apiResource('transactions', TransactionController::class);

    // Category routes
    Route::apiResource('categories', CategoryController::class);
});

// Authentication routes
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);
