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

    <form action="/bookshops" method="POST">

        @csrf

        <label>
            Name:<br>
            <input type="text" name="name">
        </label>
<br>
        <label>
            City:<br>
            <input type="text" name="city">
        </label>
<br>
<br>
        <input type="submit" value="Save new bookshop">



    </form>
</body>
</html>