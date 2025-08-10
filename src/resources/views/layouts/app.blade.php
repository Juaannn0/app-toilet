<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mapa de Baños')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
</head>
<body>
    <header class="header">
        <h1>Mapa de Baños Públicos</h1>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer class="footer">
        <p>© {{ date('Y') }} Mapa de Baños - Todos los derechos reservados</p>
    </footer>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <!-- Scripts propios -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')
</body>
</html>
