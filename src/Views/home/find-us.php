<section class="w-full my-10">
    <h2 class="heading-2">Nous trouver et nous joindre</h2>
    <div class="flex flex-col md:flex-row gap-8">
        <?php include SRC_PATH . '/Views/partials/map-container.php'; ?>

        <div class="w-full md:w-1/2 flex flex-col gap-4 justify-center">
            <div class="flex flex-row items-center gap-4">
                <iconify-icon icon="lucide:map-pin" class="size-6 text-slate-950" width="100%" height="100%"></iconify-icon>
                <address class="font-semibold not-italic text-slate-900">
                    Gymnase Auguste Delaune<br />
                    19 Rue François Mitterrand<br />
                    14123 Fleury-sur-Orne
                </address>
            </div>
            <div class="flex flex-row items-center gap-4">
                <iconify-icon icon="lucide:phone" class="size-6 text-slate-950" width="100%" height="100%"></iconify-icon>
                <a href="tel:+33651699722" class="italic font-semibold text-slate-900 hover:text-orange-500 transition-colors">
                    06 51 69 97 22
                </a>
            </div>

            <div class="flex flex-row items-center gap-4">
                <iconify-icon icon="lucide:at-sign" class="size-6 text-slate-950" width="100%" height="100%"></iconify-icon>
                <a href="mailto:fso.basket@gmail.com" class="underline underline-offset-2 italic font-semibold text-blue-600 hover:text-orange-600 transition-colors">
                    fso.basket@gmail.com
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", showMap());

    function showMap() {
        const latitude = <?php echo $latitude; ?>;
        const longitude = <?php echo $longitude; ?>;
        const title = "<?php echo $title; ?>";

        const defaultIcon = L.icon({
            iconUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png',
            iconRetinaUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon-2x.png',
            shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            shadowSize: [41, 41],
            popupAnchor: [1, -34]
        });

        const map = L.map('leaflet-map', {
            scrollWheelZoom: false,
        }).setView([latitude, longitude], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap'
        }).addTo(map);

        const marker = L.marker([latitude, longitude], { icon: defaultIcon }).addTo(map);
        marker.bindPopup(`<span class="font-semibold text-slate-900">${title}</span>`);
    }
</script>