<!-- palindrome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .input-form {
            margin-top: 20px;
        }
        .result {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Palindrome Checker</h1>
    <div class="input-form">
        <form action="{{ route('checkPalindrome') }}" method="POST">
            @csrf
            <input type="text" name="string" required>
            <button type="submit">Check</button>
        </form>
        <div class="result">
            @if(isset($result))
                @if($result)
                    <span style="color: green;">It's a palindrome!</span>
                @else
                    <span style="color: red;">It's not a palindrome.</span>
                @endif
            @endif
        </div>
    </div>
</body>
</html>
