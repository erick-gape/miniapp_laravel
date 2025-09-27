<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Registros de Mensajes</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensajes as $m)
                <tr>
                    <td>{{ $m['nombre'] }}</td>
                    <td>{{ $m['email'] }}</td>
                    <td>{{ $m['mensaje'] }}</td>
                    <td>{{ $m['fecha'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
