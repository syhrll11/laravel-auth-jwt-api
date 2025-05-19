<!DOCTYPE html>
<html>
<head>
    <title>Book Sales</title>
</head>
<body>
    <h1>Genres</h1>
    <ul>
        @foreach($genres as $genre)
            <li>{{ $genre }}</li>
        @endforeach
    </ul>

    <h1>Authors</h1>
    <ul>
        @foreach($authors as $author)
            <li>{{ $author }}</li>
        @endforeach
    </ul>
</body>
</html>
