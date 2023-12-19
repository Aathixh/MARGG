document.addEventListener('DOMContentLoaded', function() {
    var mapElement = document.getElementById('map');
    var latitude = parseFloat(mapElement.getAttribute('data-latitude'))||0;
    var longitude = parseFloat(mapElement.getAttribute('data-longitude'))||0;

    var mapOptions = {
        center: [latitude, longitude],
        zoom: 10
    };


    // Add red markers with labels
    var redIcon = new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
        shadowUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });


    // Creating a map object
    var map = new L.map('map', mapOptions);

    // Creating a Layer object
    var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

    // Adding layer to the map
    map.addLayer(layer);

    var scale = L.control.scale(); // Creating scale control
    scale.addTo(map);

    var marker = L.marker([latitude, longitude]).bindPopup('User');
    marker.addTo(map);

    //extra mark
    var marker2 = L.marker([17.49687, 78.66422] ,{ icon: redIcon }).bindPopup('Bus 1');
    marker2.addTo(map);

    var marker3 = L.marker([17.4705, 78.6408], { icon: redIcon }).bindPopup('Bus 2');
    marker3.addTo(map);

    var marker4 = L.marker([17.4625, 78.6522], { icon: redIcon }).bindPopup('Bus 3');
    marker4.addTo(map);

    console.log('Latitude:', latitude);
    console.log('Longitude:', longitude);
});