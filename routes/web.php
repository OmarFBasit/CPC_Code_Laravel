<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccController;
 // Web Route
Route::post('/cal', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'form']);



