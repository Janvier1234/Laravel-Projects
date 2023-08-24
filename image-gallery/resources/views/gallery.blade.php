<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
</head>
<body>
    <div class="gallery">
        @foreach($images as $image)
            <div class="image">
                <a href="{{ asset('images/' . $image) }}" target="_blank">
                    <img src="{{ asset('images/' . $image) }}" alt="Image">
                </a>
            </div>
        @endforeach
    </div>
</body>
</html>
