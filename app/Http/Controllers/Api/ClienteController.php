<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    
   public function index()
    {
    return Cliente::all();
    }

    
public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:clientes,email'
    ]);

    $cliente = Cliente::create($request->all());

    return response()->json($cliente, 201);
}

    public function show(string $id)
{
    $cliente = Cliente::find($id);

    if (!$cliente) {
        return response()->json([
            'message' => 'Cliente no encontrado'
        ], 404);
    }

    return response()->json($cliente, 200);
}

    public function update(Request $request, string $id)
{
    $cliente = Cliente::find($id);

    if (!$cliente) {
        return response()->json([
            'message' => 'Cliente no encontrado'
        ], 404);
    }

    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'membresia_id' => 'required|exists:membresias,id'
    ]);

    $cliente->update($request->all());

    return response()->json($cliente, 200);
}

    public function destroy(string $id)
{
    $cliente = Cliente::find($id);

    if (!$cliente) {
        return response()->json([
            'message' => 'Cliente no encontrado'
        ], 404);
    }

    $cliente->delete();

    return response()->json([
        'message' => 'Cliente eliminado correctamente'
    ], 200);
}
}