@extends('layouts.main',[
    'title' => 'Home',
    'current_menu_item' => 'home'
])

@section('content')

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

@endsection