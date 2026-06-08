<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rutina;

class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    return Rutina::all();
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rutina = Rutina::create($request->all());

        return response()->json($rutina, 201);
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}