<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$selected_book->title}}</title>
</head>
<body>

<h1>{{$selected_book->title}}</h1>
<h2>{{$selected_book->authors}}</h2>


    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium dolore similique exercitationem repellendus, odit beatae praesentium quia, vitae deleniti architecto cum illo? Ratione delectus ipsam laborum sapiente, amet placeat!</p>



<br>
<img src="{{$selected_book->image}}" alt="">
<br>
<a href="{{action('EshopController@index')}}">Back to home </a>

</body>
</html>