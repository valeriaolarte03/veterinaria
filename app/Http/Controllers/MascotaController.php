<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Cliente;
use App\Models\Raza;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'cliente_id' => 'required|int',
            'raza_id' => 'required|int',
        ]);

        Mascota::create($request->all());
        return redirect()->route('mascotas.index')->with('success', 'mascota creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mascota $mascota)
    {
        $clientes = Cliente::all();
        $razas = Raza::all();
        return view('mascotas.edit', compact('mascota', 'clientes', 'razas'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'cliente_id' => 'required|int',
            'raza_id' => 'required|int',
        ]);

        $mascota->update($request->all());
        return redirect()->route('mascotas.index')->with('success', 'mascota actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->route('mascotas.index')->with('success', 'mascota eliminado.');
    }
}
