<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla si no sigue la convención en plural
    protected $table = 'Vehiculos'; 

    // Especificar la clave primaria si es diferente de "id"
    protected $primaryKey = 'ID_Vehiculo';

    // Laravel maneja automáticamente timestamps (created_at, updated_at)
    // Si tu tabla no tiene estos campos, desactívalos
    public $timestamps = false;

    // Definir los campos que se pueden asignar masivamente
    protected $fillable = ['Placa', 'Marca', 'Modelo', 'Anio', 'Capacidad', 'Estado', 'Tipo'];
}
