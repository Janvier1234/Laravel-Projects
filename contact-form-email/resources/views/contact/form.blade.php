<!-- resources/views/contact/form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <!-- Include your CSS styles here -->
</head>
<body>
    <h1>Contact Us</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea>

        <button type="submit">Send</button>
    </form>
</body>
</html>
