<?php

use App\Http\Controllers\VehiculoController;

Route::get('/vehiculos', [VehiculoController::class, 'index']);
