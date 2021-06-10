<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{mix('css/style.css')}}">
    <title>{{$title}}</title>
    <style>
        a.current{
            text-decoration: none;
        }
    </style>
</head>
<body>

@include('partials.header',[
    'current'=> $current_menu_item ?? null
])


<h1>Bookshop Project</h1>
<hr>

<main>
    @include('partials.messages')

    @yield('content')



</main>

</body>
</html>