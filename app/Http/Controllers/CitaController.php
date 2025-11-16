<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Mascota;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas= Cita::all();
        return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mascotas = Mascota::all();
        return view('citas.create', compact('mascotas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mascota_id' => 'required|integer',
            'fecha_cita' => 'required|date',
            'motivo' => 'required',
            'estado' => 'required|boolean'
        ]);
       
        Cita::create($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita creada correctamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {   $mascotas = Mascota::all();
        return view('citas.edit', compact('cita', 'mascotas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'mascota_id' => 'required|integer',
            'fecha_cita' => 'required|date',
            'motivo' => 'required',
            'estado' => 'required|boolean'
        ]);
        $cita->update($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada.');
    
    }
}
