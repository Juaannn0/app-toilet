<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Baños</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f8f0; /* verde pastel suave */
        }
        #map {
            height: 90vh;
            width: 100%;
            border: 2px solid #a4d4ae;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center; color:#4CAF50;">Mapa de Baños Públicos</h1>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([4.7110, -74.0721], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        L.marker([4.7110, -74.0721]).addTo(map)
            .bindPopup("<b>Baño público</b><br>Plaza principal")
            .openPopup();
    </script>
</body>
</html>
