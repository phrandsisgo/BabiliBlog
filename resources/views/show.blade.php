<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show post</title>
</head>
<body>
    <p> {{$post ->title}}</p>
    <p>{{$post -> content}}</p>
    <p>the id is {{$post -> id}}</p>
    
</body>
</html>