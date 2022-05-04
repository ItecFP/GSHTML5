<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Suprema - HTML5</title>
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!--
        <link rel="stylesheet" href="/css/style.css">
    -->
    <link rel="stylesheet" href="/css/variables.gshtml.css">
    <link rel="stylesheet" href="/css/header.gshtml.css">
    <link rel="stylesheet" href="/css/logo.gshtml.css">
    <link rel="stylesheet" href="/css/footer.gshtml.css">
    <script src="/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/navbar.js"></script>
</head>

<body class="container-fluid m-0 p-0">

    <header id ="row topbar" class="navbar sticky-top navbar-expand-sm navbar-dark text-light">
       @include('env.topbar')
    </header>
    <div class="d-flex">
        <main id="contenido">
            @include("categorias.categoriagrid")

        </main>
    </div>

    <footer class="footer fixed-bottom navbar-expand-sm">
        @include('env.footer')
    </footer>
</body>
</html>
