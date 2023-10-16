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
    @if(auth()->user()->id == $post->user_id)
        
    <a href="/post_bearbeiten/{{$post -> id}}"> Bearbeiten</a>
    @endif
    <h2>Comments</h2>
    <ul>
        @foreach($post->comments as $comment)
            <li>
                <p>{{ $comment->content }}</p>
                <p>{{ $comment->user->name }}</p>
                @if(auth()->user()->id == $comment->user_id)
                <a href="/comment_update/{{$comment -> id}}">Kommentar Bearbeiten</a>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>