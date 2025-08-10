@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h2>Encuentra el baño más cercano</h2>
    <div id="map" style="width:100%;height:500px;"></div>
@endsection

@section('scripts')
<script>
    // Inicializar mapa
    var map = L.map('map').setView([4.60971, -74.08175], 13); // Bogotá como ejemplo

    // Cargar tiles (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Marcador de ejemplo
    L.marker([4.60971, -74.08175])
        .addTo(map)
        .bindPopup('Baño público de prueba.')
        .openPopup();
</script>
@endsection
