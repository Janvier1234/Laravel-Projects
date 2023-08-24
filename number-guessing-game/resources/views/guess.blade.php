<!DOCTYPE html>
<html>
<head>
    <title>Guess Number Game</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Guess the Number</h1>
        @isset($message)
            <p class="message">{{ $message }}</p>
        @endisset
        <form action="/guess" method="POST">
            @csrf
            <input type="number" name="guess" placeholder="Enter your guess">
            <button type="submit">Check</button>
        </form>
    </div>
</body>
</html>
