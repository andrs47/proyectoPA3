<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rutina;

class RutinaController extends Controller
{
    
   public function index()
{
    return Rutina::all();
}

    
public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'duracion' => 'required|integer|min:1',
        'nivel' => 'required|string|max:100'
    ]);

    $rutina = Rutina::create($request->all());

    return response()->json($rutina, 201);
}

    public function show(string $id)
{
    $rutina = Rutina::find($id);

    if (!$rutina) {
        return response()->json([
            'message' => 'Rutina no encontrada'
        ], 404);
    }

    return response()->json($rutina, 200);
}

    public function update(Request $request, string $id)
{
    $rutina = Rutina::find($id);

    if (!$rutina) {
        return response()->json([
            'message' => 'Rutina no encontrada'
        ], 404);
    }

    $request->validate([
        'nombre' => 'required|string|max:255',
        'duracion' => 'required|integer|min:1',
        'nivel' => 'required|string|max:100',
        'entrenador_id' => 'required|exists:entrenadores,id'
    ]);

    $rutina->update($request->all());

    return response()->json($rutina, 200);
}

    public function destroy(string $id)
{
    $rutina = Rutina::find($id);

    if (!$rutina) {
        return response()->json([
            'message' => 'Rutina no encontrada'
        ], 404);
    }

    $rutina->delete();

    return response()->json([
        'message' => 'Rutina eliminada correctamente'
    ], 200);
}
}