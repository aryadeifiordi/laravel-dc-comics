<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body>
    <div class="container">
        <h1>Edit Comic</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div>
                <label for="author">Author</label>
                <input type="text" id="author" name="author" value="{{ $comic->author }}">
            </div>
            <div>
                <label for="year">Year</label>
                <input type="number" id="year" name="year" value="{{ $comic->year }}">
            </div>
            <button type="submit">Save Changes</button>
        </form>
    </div>

</body>

</html>
