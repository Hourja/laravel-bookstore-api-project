@extends('layouts.main',
[
    'title'=> 'List of Authors',
    'current_menu_item' => 'authors'

])


@section('content')

    @foreach ($authors as $author)
        <h1>{{$author->name}}</h1>
        <h2>{{$author->slub}}</h2>
        <p>{{$author->bio}}</p>
        <pre>{{$author->created_at}}</pre>
    @endforeach

@endsection