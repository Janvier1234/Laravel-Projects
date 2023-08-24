<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>BMI Calculator</h1>
        <form method="post" action="/bmi/calculate">
            @csrf
            <div class="form-group">
                <label for="weight">Weight (kg):</label>
                <input type="text" name="weight" id="weight" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="height">Height (cm):</label>
                <input type="text" name="height" id="height" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate BMI</button>
        </form>
    </div>
</body>
</html>
