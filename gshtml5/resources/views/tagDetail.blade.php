<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="\css\styleContent.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="\bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
    <title>Etiqueta #nombre_etiqueta</title>
</head>
<body>
    <header>
        @include('topbar');
    </header>
    <main>
        <aside>
            @include('navContent');
        </aside>
        @include('tagDetailContent');
    </main>
</body>
</html>