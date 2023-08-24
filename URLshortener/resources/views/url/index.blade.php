<!-- resources/views/url/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>URL Shortener</h1>
        <form action="{{ route('shorten') }}" method="post">
            @csrf
            <input type="text" name="url" placeholder="Enter URL to shorten" required>
            <button type="submit">Shorten</button>
        </form>

        <h2>Shortened URLs:</h2>
        <ul>
            @foreach ($urls as $url)
                <li>
                    <a href="{{ route('redirect', $url->short_code) }}" target="_blank">
                        {{ route('redirect', $url->short_code) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
