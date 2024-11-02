<?php

use App\Http\Controllers\ImageAIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/upload/{id}',[ImageAIController::class,'test']);
