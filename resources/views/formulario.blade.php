<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Formulario de Contacto</h2>

    <form id="formulario">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="registros" class="btn btn-primary" style="margin-left: 10px;">Ver Registros</a>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#formulario').on('submit', function(e) {
            e.preventDefault();

            const nombre = $('#nombre').val().trim();
            const email = $('#email').val().trim();
            const mensaje = $('#mensaje').val().trim();

            if (!nombre || !email || !mensaje) {
                alert('Todos los campos son obligatorios');
                return;
            }

            $.ajax({
                url: '/guardar',
                method: 'POST',
                data: {
                    nombre,
                    email,
                    mensaje,
                    _token: '{{ csrf_token() }}'
                },
                success: function(res) {
                    alert('Mensaje guardado');
                    $('#formulario')[0].reset();
                }
            });
        });
    </script>
</body>
</html>
