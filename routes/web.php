<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta principal
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

// Ruta de telefonos del usuario
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/telefonos',
        \App\Http\Livewire\TelefonoComponent::class
    )
    ->name('telefonos');


// Ruta de usuarios
Route::middleware(['auth:sanctum', 'verified'])
->get('/usuarios',
    \App\Http\Livewire\UsuariosComponent::class
)
->name('usuarios');

// Ruta de telefonos
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/administrar-telefono',
        \App\Http\Livewire\FormularioTelefonoComponent::class
    )
    ->name('telefono-tareas');

// Ruta de edición de teléfonos
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/editar-telefono/{id}',
        \App\Http\Livewire\FormularioTelefonoComponent::class
    )
    ->name('telefonos-editar');

// Ruta de eliminar un teléfono
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/eliminar-telefono/{id}',
        \App\Http\Livewire\FormularioTelefonoComponent::class
    )
    ->name('telefonos-eliminar');

// Ruta para Operadoras
Route::middleware(['auth:sanctum', 'verified'])
->get('/operadoras',
    \App\Http\Livewire\OperadorasComponent::class
)
->name('operadoras');

// Ruta de Operadoras
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/administrar-operadoras',
        \App\Http\Livewire\FormularioOperadoraComponent::class
    )
    ->name('operadoras-tareas');

    // Ruta de edición de operadora
Route::middleware(['auth:sanctum', 'verified'])
->get('/editar-operadora/{id}',
    \App\Http\Livewire\FormularioOperadoraComponent::class
)
->name('operadoras-editar');

// Ruta de eliminar una operadora
Route::middleware(['auth:sanctum', 'verified'])
->get('/eliminar-operadora/{id}',
    \App\Http\Livewire\FormularioOperadoraComponent::class
)
->name('operadoras-eliminar');