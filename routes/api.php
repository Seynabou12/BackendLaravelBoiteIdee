<?php

use App\Http\Controllers\API\ApprenantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/home', [ApprenantController::class, 'index']);
Route::post('/ajouter', [ApprenantController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
