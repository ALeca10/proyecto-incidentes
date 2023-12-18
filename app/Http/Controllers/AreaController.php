<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtener incidentes de la base de datos
        $areas = \App\Models\Area::all();

        //Asignar la cabecera
        $heads = [
            'ID',
            'Lugar'
        ];

        //Retornar la vista con los parámetros
        
        return view('areas.index', compact('areas', 'heads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lugar' => 'required',
        ]);
        
        $request = Area::create([
            'lugar' => $request->get('lugar'),
        ]);

        return redirect()->route('areas.index')->with('status', 'Zona creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        //
    }
}
