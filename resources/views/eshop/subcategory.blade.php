@extends('layouts.main',[
    'title'=>$subcategory_name
])


@section('content')
 <div class="container">

        <h1>Category: {{$subcategory_name}}</h1>
         <a href="{{action('EshopController@index')}}">Back to home </a>


    @foreach($matching_books as $books => $book)

    <div class="book-item">
        <hr>
        <h2>{{$book->title}}</h2>
        <h3>{{$book->authors}}</h3>
        <img src="{{$book->image}}" alt="">
        <br>
        <a href="{{action('EshopController@show', $book->id)}}">Book Details</a>
    </div>

    @endforeach


</div>

@endsection