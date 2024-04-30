<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Crear Empleado</h1>

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
    
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="Nombre" name="Nombre"><br>

        <label for="apellido">PrimerApellido:</label><br>
        <input type="text" id="Primerapellido" name="Apellido"><br>

        <label for="apellido">SegundoApellido:</label><br>
        <input type="text" id="SegundoApellido" name="SegundoApellido"><br>
      
        <label for="apellido">Correo</label><br>
        <input type="text" id="Correo" name="Correo"><br>

        <button type="submit">Guardar</button>
        
    </form>
</body>
</html>