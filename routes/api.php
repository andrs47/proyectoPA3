<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\RutinaController;

Route::get('/clientes', [ClienteController::class, 'index']);
Route::post('/clientes', [ClienteController::class, 'store']);

Route::get('/rutinas', [RutinaController::class, 'index']);
Route::post('/rutinas', [RutinaController::class, 'store']);

Route::get('/prueba', function () {
    return response()->json([
        'mensaje' => 'API funcionando'
    ]);
});