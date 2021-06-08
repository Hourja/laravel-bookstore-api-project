<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Book Eshop</title>
</head>
<body>
<div class="container">
        <h1>Welcome to our bookstore!</h1>
    <ul>

    @foreach($categories as $category)

    <li class="category-list"><a href="{{action('EshopController@category', "$category->name")}}">{{$category->name}}</a></li>

    @endforeach

    </ul>

    @foreach($all_books as $books => $book)

    <div class="book-item">
        <hr>
        <h2>{{$book->title}}</h2>
        <h3>{{$book->authors}}</h3>
        <img src="{{$book->image}}" alt="">
         <a href="{{action('EshopController@show', $book->id)}}">Book Details</a>
    </div>

    @endforeach

</div>

</body>
</html>