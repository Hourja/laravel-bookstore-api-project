@extends('layouts.main',[
    'title' => 'Create a bookshop Form'
])
@section('content')

<body>
    <h1>Create a new bookshop</h1>
     <form action="{{ action('BookshopController@store') }}" method="POST">
@csrf


@component('components.form-group',[
    'label' => 'Name',
    'names' => 'names',
])

 <input type="text" name="name" value="">

@endcomponent

@component('components.form-group',[
    'label' => 'City',
    'city' => 'city',
])

 <input type="text" name="city" value="">

@endcomponent






        <input type="submit" value="submit">
    </form>

@endsection
