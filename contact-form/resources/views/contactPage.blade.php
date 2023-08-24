<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @if(session('flash'))
    <p style="color:lawngreen">{{ session('flash') }}</p>
    @endif
<h1>Elegant Contact Form</h1>
<form class="cf" action="/contact" method="post">
    @csrf
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="Name" name="name">
    <input type="email" id="input-email" placeholder="Email address" name="email">
    <input type="text" id="input-subject" placeholder="Subject" name="suject">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
  <input type="submit" value="Submit" id="input-submit">
</form>
    
</body>
</html>
