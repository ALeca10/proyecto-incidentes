<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtener incidentes de la base de datos
        $categorias = \App\Models\Categoria::all();

        //Asignar la cabecera
        $heads = [
            'ID',
            'Nombre'
        ];

        //Retornar la vista con los parámetros
        return view('categorias.index', compact('categorias', 'heads'));
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
            'nombre' => 'required',
        ]);
        
        $request = Categoria::create([
            'nombre' => $request->get('nombre'),
        ]);

        return redirect()->route('categorias.index')->with('status', 'Categoría creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
