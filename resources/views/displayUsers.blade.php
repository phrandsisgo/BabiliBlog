<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display all the Users</title>
</head>
<body>
@foreach ($users as $user) 
    <div class="tweet-container"> 
        <p class="date">{{ date('d.m.y', strtotime($user->created_at)) }}</p>
        <h3>{{ $user->name }}</h3>
        <p>{{ $user->email }}</p>
        <p>{{ $user->profile_picture }}</p>
        <p>the User ID is {{$user -> id}}</p>
    </div>
    @endforeach
</body>
</html>