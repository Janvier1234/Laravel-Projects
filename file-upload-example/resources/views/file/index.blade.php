<!DOCTYPE html>
<html>
<head>
    <title>File Upload Example</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Uploaded Files</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" id="file">
            <button type="submit">Upload</button>
        </form>

        @if(count($files) > 0)
            <ul>
                @foreach($files as $file)
                    <li>{{ $file->filename }}</li>
                @endforeach
            </ul>
        @else
            <p>No files uploaded yet.</p>
        @endif
    </div>
</body>
</html>
