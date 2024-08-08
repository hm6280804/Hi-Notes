<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if (session()->has('message'))
        <div class="message-success" style="display: flex; justify-content:center; height:20px; background:aqua;">
            {{ session('message') }}
        </div>
    @endif
    {{ $slot }}
</body>
</html>