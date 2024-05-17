<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



</head>

<body>
    <h1>{{ $comic->title }}</h1>
    <p><strong>Author:</strong> {{ $comic->author }}</p>
    <p><strong>Year:</strong> {{ $comic->year }}</p>


</body>

</html>
