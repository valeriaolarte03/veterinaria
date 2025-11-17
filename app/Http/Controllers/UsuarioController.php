<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rol;
use Carbon\Carbon; 
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $roles =Rol::all();
        return view('usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'id_rol' => 'required|integer',
        ]);

        dd(now()->toDateString());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'id_rol' => $request->id_rol,
            'fecha_creacion' => now()->toDateString(), // 🔹 fecha actual automáticamente
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $usuario)
    {
        $roles = Rol::all();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'id_rol' => 'required',
        ]);

        $usuario->update($request->all());
        return redirect()->route('usuarios.index')->with('success', 'usuario actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'usuario eliminado.');
    }
}
