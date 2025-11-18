<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\FcturaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('rol', RolesController::class);
    Route::resource('clientes', clienteController::class);
    Route::resource('mascotas', MascotaController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('fctura', FcturaController::class);
});
Route::middleware('auth')->group(function () {
    Route::resource('citas', CitaController::class);
});
Route::middleware('auth')->group(function () {
    Route::resource('tratamientos', TratamientoController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('especies', EspecieController::class)->parameters(['especies' => 'especie']);
});

Route::middleware('auth')->group(function () {
    Route::resource('razas', RazaController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('productos', ProductoController::class);
});
require __DIR__.'/auth.php';
