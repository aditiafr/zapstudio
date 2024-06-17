<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

<a href="{{route('dashboard')}}">
    <button class="bg-blue-700 text-white p-4 rounded">dashboard</button>
</a>

</body>

</html>