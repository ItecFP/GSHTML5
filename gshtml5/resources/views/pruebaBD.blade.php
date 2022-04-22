<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba de conexion a base de datos - Sergio</title>
</head>
<body>
    @foreach ($tagdata as $clave )
        <p>{{print_r($clave)}}</p>
    @endforeach
    
</body>
</html>