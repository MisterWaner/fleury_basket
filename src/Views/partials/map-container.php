<?php
/**
 * @var float $latitude
 * @var float $longitude
 * @var string $title. Le titre de la bulle (optionnel)
 */

$latitude = $latitude ?? 49.151878;
$longitude = $longitude ?? -0.37203;
$title = $title ?? "Fleury Sur Orne Basket 🏀";
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<div class="w-full md:w-1/2 h-64 md:h-80 rounded-lg overflow-hidden shadow-lg border relative z-0">
    <div id="leaflet-map" class="w-full h-full"></div>
</div>