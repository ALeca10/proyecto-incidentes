<?php

namespace App\Http\Controllers;

use App\Models\Resolucion;
use Illuminate\Http\Request;

class ResolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtener incidentes de la base de datos
        $incidentes = \App\Models\Incidente::all();

        //Asignar la cabecera
        $heads = [
            'ID',
            'Usuario',
            'Título',
            'Fecha',
            'Estado',

        ];

        //Retornar la vista con los parámetros
        
        return view('resoluciones.index', compact('incidentes', 'heads'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resolucion $resolucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resolucion $resolucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resolucion $resolucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resolucion $resolucion)
    {
        //
    }
}
