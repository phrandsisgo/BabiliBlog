<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display all the posts</title>
</head>
<body>
@if (auth()->check())
    <h1>Willkommen, {{auth()->user()->name}}</h1>
@else
    <h1>Willkommen, Gast</h1>
@endif
@foreach ($posts as $post) 
    <div class="tweet-container"> 
        <p class="date">{{ date('d.m.y', strtotime($post->created_at)) }}</p>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <p>the id is {{$post -> id}}</p>
        <p>the user ID is: {{$post -> user_id}}</p>
        <a href="/show/{{$post->id}}">View Show</a>
    </div>
    @endforeach
</body>
</html>