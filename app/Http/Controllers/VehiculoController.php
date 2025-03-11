<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo; // Asegúrate de importar el modelo

class VehiculoController extends Controller
{
    public function index()
    {
        // Obtener todas las placas, marcas y modelos de los vehículos
        $vehiculos = Vehiculo::select('Placa', 'Marca', 'Modelo')->get();

        // Retornar la vista y enviarle los datos
        return view('vehiculos.index', compact('vehiculos'));
    }
}
