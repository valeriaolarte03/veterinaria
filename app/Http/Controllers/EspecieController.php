<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especies = Especie::all();
        return view('especies.index', compact('especies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('especies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        Especie::create($request->all());
        return redirect()->route('especies.index')->with('success', 'especie creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Especie $especie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Especie $especie)
    {
        return view('especies.edit', compact('especie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especie $especie)
    {
         $request->validate([
            'nombre' => 'required',
        ]);

        $especie->update($request->all());
        return redirect()->route('especies.index')->with('success', 'especie actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especie $especie)
    {
        $especie->delete();
        return redirect()->route('especies.index')->with('success', 'especie eliminada correctamente.');
    }
}
