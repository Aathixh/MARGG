<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track your Bus!</title>
    <link rel="stylesheet" href="css/locate.css"><!-- css for map -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>

<body>
    <div id="map" data-latitude="{{ $latitude }}" data-longitude="{{ $longitude }}"></div>
    <script src="{{ asset('js/map.js') }}"></script>
    <div class="container content">
        <form action="/alert" method="get">
            @csrf
            <button type="submit">
                <span class="shadow"></span>
                <span class="edge"></span>
                <span class="front text">GIve An Alert
                </span>
            </button>
        </form>
    </div>
    <footer style="margin-top:10%; text-align:center">
        <h1>Medical Helpline</h1>
        Vajra Hospital :- <strong>09542443145</strong><br>
        Apex Hospital :- <strong>08897811811</strong>
    </footer>
</body>

</html>