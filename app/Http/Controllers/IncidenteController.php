<?php

namespace App\Http\Controllers;

use App\Models\Incidente;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Area;

class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        $areas = Area::all();
        return view('incidentes.index', compact('categorias', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);
        
        $request->user()->incidentes()->create([
            'titulo' => $request->get('titulo'),
            'fecha_incidente' => $request->get('fecha_incidente'),
            'area_id' => $request->get('area_id'),
            'descripcion' => $request->get('descripcion'),
            'categoria_id' => $request->get('categoria_id'),
            'estado' => 'A',
        ]);

        return redirect()->route('incidentes.list')->with('status', 'Incidente creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Incidente $incidente)
    {
        return view('incidentes.list', [
            'incidentes' => Incidente::with('user')->latest()->get() //Optimizacion para evitar N+1
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incidente $incidente)
    {
        // Para evitar que se editen incidentes de otros usuarios
        // if(auth()->user()->isNot($incidente->user))    {
        //     abort(403);
        // }

        return view('incidentes.edit', [
            'incidente' => $incidente
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incidente $incidente)
    {
        // Para evitar que se editen incidentes de otros usuarios
        // if(auth()->user()->isNot($incidente->user))    {
        //     abort(403);
        // }
        
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);
        
        $incidente->update([
            'titulo' => $request -> titulo,
            'fecha_incidente' => $request -> fecha_incidente,
            'descripcion' => $request -> descripcion,
        ]);

        return to_route('incidentes.list')
            ->with('status', 'Incidente editado correctamente');

        // return redirect()->action([IncidenteController::class, 'index'])
        //     ->with('status', 'Incidente editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incidente $incidente)
    {
        //
    }
}
