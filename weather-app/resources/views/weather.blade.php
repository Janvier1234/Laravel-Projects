<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <link rel="stylesheet" href="{{ asset('css/weather.css') }}">
</head>
<body>
    <div class="container">
        <h1>Weather App</h1>
        <div class="weather-info">
        foreach($data as $items)
        <div>
            {{ $items->name }}
        </div>
        @endforeach
        </div>
    </div>

    <script src="{{ asset('js/weather.js') }}"></script>
</body>
</html>
