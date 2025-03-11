<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vehículos</title>
</head>
<body>
    <h1>Lista de Vehículos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->Placa }}</td>
                    <td>{{ $vehiculo->Marca }}</td>
                    <td>{{ $vehiculo->Modelo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
