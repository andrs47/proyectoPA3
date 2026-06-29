<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\RutinaController;

Route::apiResource('clientes', ClienteController::class);
Route::apiResource('rutinas', RutinaController::class);

Route::get('/prueba', function () {
    return response()->json([
        'mensaje' => 'API funcionando'
    ]);
});