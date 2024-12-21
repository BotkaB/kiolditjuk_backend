<?php

use App\Http\Controllers\BejegyzesekController;
use App\Http\Controllers\TevekenysegController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/bejegyzesek', [BejegyzesekController::class,'index']);
Route::get('/bejegyzesek/{osztaly_id}', [BejegyzesekController::class,'show']);
Route::post('/bejegyzesek', [BejegyzesekController::class,'postBejegyzes']);

Route::get('/tevekenysegek', [TevekenysegController::class,'index']);
