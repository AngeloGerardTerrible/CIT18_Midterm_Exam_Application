<!DOCTYPE html>
<html>
<head>
    <title>Anime List</title>
</head>
<body>
    <h1>Anime List</h1>
    <ul>
        @foreach ($products as $anime)
            <li>
                <h2>{{ $anime->title }}</h2>
                <p>Genre: {{ $anime->genre }}</p>
                <p>Episodes: {{ $anime->episodes }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>