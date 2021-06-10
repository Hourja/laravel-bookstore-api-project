@extends ('layouts.main',[
    'title' =>$category_name])

@section('content')
    <body>
        <div class="container">
            <h1>Category: {{ $category_name }}</h1>
            <a href="{{ action('EshopController@index') }}">Back to home </a>
            <h2>{{$subcategories[0]->title}}</h2>

            @foreach($subcategories as $subcategory)

            <li class="category-list">
                <a href="{{action('EshopController@subcategory', "$subcategory->name")}}">{{$subcategory->name}}</a
                >
            </li>

            @endforeach

            @foreach($matching_books as $books => $book)

            <div class="book-item">
                <hr />
                <h2>{{$book->title}}</h2>
                <h3>{{$book->authors}}</h3>
                <img src="{{$book->image}}" alt="" />

                <a href="{{action('EshopController@show', $book->id)}}">Book Details</a
                >
            </div>

            @endforeach
        </div>
@endsection