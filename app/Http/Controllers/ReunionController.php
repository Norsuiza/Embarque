<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reunion;

class ReunionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reuniones = Reunion::get();
        return response()->json($reuniones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $reunion = new Reunion();
            $reunion->name = $request->name;
            $reunion->description = $request->description;
            $reunion->save();

            $reunion->mensaje = 'Reunión creada exitosamente';
            $reunion->status = 200;
            return response()->json($reunion);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reunion = Reunion::find($id);
        return response()->json($reunion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reunion = Reunion::find($id);
        $reunion->name = $request->name;
        $reunion->description = $request->description;
        $reunion->save();
        return response()->json($reunion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reunion::destroy($id);
        return response()->json(['mensaje' => 'Reunión eliminada exitosamente']);
    }
}
