<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($authors as $author)

    <h1>{{$author->name}}</h1>
    <h2>{{$author->slub}}</h2>

    <p>{{$author->bio}}</p>


    <pre>{{$author->created_at}}</pre>

  @endforeach
</body>
</html>