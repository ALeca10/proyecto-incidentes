<?php

use App\Http\Controllers\ResolucionController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\ProfileController;
use Database\Seeders\Areas;
use Illuminate\Support\Facades\Route;

// DB::listen(function($query)   {
//         dump($query->sql,);
// });

Route::view('/','welcome')->name('welcome');
Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::get('/incidentes', [IncidenteController::class, 'index'])
        ->name('incidentes.index');

Route::post('/incidentes', [IncidenteController::class, 'store'])
        ->name('incidentes.store');

Route::get('/incidentes/list', [IncidenteController::class, 'show'])
        ->name('incidentes.list');

Route::get('/incidentes/{incidente}/edit', [IncidenteController::class, 'edit'])
        ->name('incidentes.edit');

Route::put('/incidentes/{incidente}', [IncidenteController::class, 'update'])
        ->name('incidentes.update');


//Categorias routing
Route::get('/categorias', [CategoriaController::class, 'index'])
        ->name('categorias.index');

Route::post('/categorias', [CategoriaController::class, 'store'])
        ->name('categorias.store');


//Zonas routing
Route::get('/areas', [AreaController::class, 'index'])
        ->name('areas.index');

Route::post('/areas', [AreaController::class, 'store'])
        ->name('areas.store');


//Resoluciones routing
Route::get('/resoluciones', [ResolucionController::class, 'index'])
        ->name('resolucion.index');

require __DIR__.'/auth.php';

