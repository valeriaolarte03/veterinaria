<?php

namespace App\Http\Controllers;

use App\Models\Fctura;
use Illuminate\Http\Request;

class FcturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fcturas = Fctura::all();
        return view('fctura.index', compact('fcturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fctura.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|integer',
            'fecha' => 'required|date',
            'total' => 'required|decimal',
        ]);

        Fctura::create($request->all());
        return redirect()->route('fctura.index')->with('success', 'Factura creada correctamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Fctura $fcturas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fctura $fctura)
    {
        return view('fctura.edit', compact('fctura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fctura $fctura)
    {
        $request->validate([
            'cliente_id' => 'required|integer',
            'fecha' => 'required|date',
            'total' => 'required',
        ]);

        $fctura->update($request->all());
        return redirect()->route('fctura.index')->with('success', 'Factura actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fctura $fctura)
    {
        $fctura->delete();
        return redirect()->route('fctura.index')->with('success', 'Factura eliminada.');
    }
}
