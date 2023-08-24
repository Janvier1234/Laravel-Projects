<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence</title>
    <style>
        /* Add your CSS styling here */
        /* For example, you can style the sequence as a list */
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            display: inline-block;
            margin: 5px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Fibonacci Sequence</h1>
    <ul>
        @foreach ($fibonacci as $number)
            <li>{{ $number }}</li>
        @endforeach
    </ul>
</body>
</html>
