<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Bookshop</title>
</head>

<body>
    <h1>Create a new bookshop</h1>
     <form action="{{ action('BookshopController@store') }}" method="POST">
@csrf
        <label>
            City
            <input type="text" name='city'>
        </label>
         <label>
            Name
            <input type="text" name='name'>
        </label>
        <input type="submit" value="submit">
    </form>




</body>
</html>