<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\SolicitudesController;
use App\Models\Solicitudes; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('mascotas/', [MascotaController::class, 'index']);
Route::get('mascotas/create', [MascotaController::class, 'create']);
Route::post('mascotas/', [MascotaController::class, 'store']);
Route::get('/mascotas/show/{mascota}', [MascotaController::class, 'show']); 
Route::get('/mascotas/edit/{mascota}', [MascotaController::class, 'edit']);
Route::put('/mascotas/update/{mascota}', [MascotaController::class, 'update']);
Route::delete('/mascotas/delete/{mascota}', [MascotaController::class, 'destroy']);

//SOLICITUDES
Route::get('solicitudes/', [SolicitudesController::class, 'index']);
Route::get('solicitudes/create', [SolicitudesController::class, 'create']);
Route::post('solicitudes/', [SolicitudesController::class, 'store']);
Route::get('/solicitudes/show/{solicitudes}', [SolicitudesController::class, 'show']); 
Route::get('/solicitudes/edit/{solicitudes}', [SolicitudesController::class, 'edit']);
Route::put('/solicitudes/update/{solicitudes}', [SolicitudesController::class, 'update']);
Route::delete('/solicitudes/delete/{solicitudes}', [SolicitudesController::class, 'destroy']);




Route::patch('/solicitudes/{id}/aprobar', [SolicitudesController::class, 'aprobar'])->name('solicitudes.aprobar');
Route::patch('/solicitudes/{id}/rechazar', [SolicitudesController::class, 'rechazar'])->name('solicitudes.rechazar');

