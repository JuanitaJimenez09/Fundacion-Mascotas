<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|in:canino,felino',
            'raza' => 'required|string|max:255',
            'edad' => 'required|integer',
            'genero' => 'required|in:hembra,macho',
            'tamaño' => 'required|in:pequeño,mediano,grande',
            'estado_salud' => 'required|string|max:255',
            'fecha_ingreso' => 'required|date',
            'estado' => 'required|in:disponible,adoptado'
        ]);

        Mascota::create($request->all());

        return redirect('/mascotas')
        ->with('success', 'Mascota registrada exitosamente.');
      
    }

    public function show(Mascota $mascota)
    {
        return view('mascotas.show', compact ('mascota'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mascota $mascota)
    {
        $data=$request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|in:canino,felino',
            'raza' => 'required|string|max:255',
            'edad' => 'required|integer',
            'genero' => 'required|in:hembra,macho',
            'tamaño' => 'required|in:pequeño,mediano,grande',
            'estado_salud' => 'required|string|max:255',
            'fecha_ingreso' => 'required|date',
            'estado' => 'required|in:disponible,adoptado'
        ]);

        $mascota->update($data);
        return redirect('/mascotas')
        ->with('success', 'Mascota actualizada exitosamente.'); 
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect('/mascotas')
        ->with('success', 'Mascota eliminada exitosamente.');
        //
    }
}
