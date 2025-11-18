<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use App\Models\Especie;
use Illuminate\Http\Request;

class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $razas = Raza::all();
        return view('razas.index', compact('razas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $especies = Especie::all();
        return view('razas.create', compact('especies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'especie_id' => 'required|integer',
        ]);

        Raza::create($request->all());
        return redirect()->route('razas.index')->with('success', 'Raza creada correctamente.');;
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Raza $raza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Raza $raza)
    {
        $especies = Especie::all();
        return view('razas.edit', compact('raza', 'especies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Raza $raza)
    {
        $request->validate([
            'name' => 'required',
            'especie_id' => 'required',
        ]);

        $raza->update($request->all());
        return redirect()->route('razas.index')->with('success', 'raza actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Raza $raza)
    {
        $raza->delete();
        return redirect()->route('razas.index')->with('success', 'raza eliminada.');
    }
}
