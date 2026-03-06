<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Mascota;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solicitudes = Solicitud::all();
        return view('solicitudes.index', compact('solicitudes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $mascotas = Mascota::all();
        return view('solicitudes.create', compact('mascotas'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $request->validate([
            'nombre_solicitante' => 'required|string|max:255',
            'correo_electronico' => 'required|email|unique:solicitudes,correo_electronico',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'motivo_adopcion' => 'required|string',
            'fecha_solicitud' => 'required|date',
            'mascota_id' => 'required|exists:mascotas,id',

        ]);

        Solicitud::create($request->all());

        return redirect('/solicitudes')
            ->with('success', 'Solicitud creada exitosamente.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Solicitud $solicitudes)
    {
        return view('solicitudes.show', compact('solicitudes'));
        //
    }


    public function aprobar($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->estado = 'aprobada';
        $solicitud->save();

        return redirect('/solicitudes')
        ->with('success', 'Solicitud aprobada exitosamente.');
    }

    public function rechazar($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->estado = 'rechazada';
        $solicitud->save();

        return redirect('/solicitudes')
        ->with('success', 'Solicitud rechazada exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitud $solicitudes)
    {
        $mascotas = Mascota::all();
        return view('solicitudes.edit', compact('solicitudes', 'mascotas'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitud $solicitudes)
    {
         $data=$request->validate([
            'nombre_solicitante' => 'required|string|max:255',
            'correo_electronico' => 'required|email|unique:solicitudes,correo_electronico,' . $solicitudes->id,
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'motivo_adopcion' => 'required|string',
            'fecha_solicitud' => 'required|date',
            'mascota_id' => 'required|exists:mascotas,id',
        ]); 
        $solicitudes->update($data);
        return redirect('/solicitudes')
            ->with('success', 'Solicitud actualizada exitosamente.');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitud $solicitudes)

    {
        $solicitudes->delete();
        return redirect('/solicitudes')
            ->with('success', 'Solicitud eliminada exitosamente.');
        //
    }
}
