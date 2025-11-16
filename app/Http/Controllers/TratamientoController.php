<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use App\Models\Cita;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tratamientos = Tratamiento::all();
        return view('tratamientos.index', compact('tratamientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $citas = Cita::all(); // Trae todas las citas para el select
        return view('tratamientos.create', compact('citas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cita_id' => 'required|integer',
            'descripcion' => 'required|string',
            'medicamento' => 'nullable|string',
            'costo' => 'required|numeric',
        ]);

        Tratamiento::create($request->all());

        return redirect()->route('tratamientos.index')->with('success', 'Tratamiento creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tratamiento $tratamiento)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tratamiento $tratamiento)
    {
        $citas = Cita::all();
        return view('tratamientos.edit', compact('tratamiento', 'citas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tratamiento $tratamiento)
    {
        $request->validate([
            'cita_id' => 'required|integer',
            'descripcion' => 'required|string',
            'medicamento' => 'nullable|string',
            'costo' => 'required|numeric',
        ]);

        $tratamiento->update($request->all());

        return redirect()->route('tratamientos.index')->with('success', 'Tratamiento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tratamiento $tratamiento)
    {
        $tratamiento->delete();
        return redirect()->route('tratamientos.index')->with('success', 'Tratamiento eliminado correctamente.');
    }
}
