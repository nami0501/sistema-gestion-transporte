<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'Vehiculos'; // Nombre de la tabla en la BD
    protected $primaryKey = 'ID_Vehiculo'; // Clave primaria
    public $timestamps = false; // Desactivar timestamps si no existen en la tabla

    protected $fillable = [
        'Placa',
        'Marca',
        'Modelo'
    ];
}
