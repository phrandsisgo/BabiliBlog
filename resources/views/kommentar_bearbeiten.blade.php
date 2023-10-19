{{-- <!DOCTYPE html>
<html>
<head>
    <title>Edit Comment</title>
</head>
<body>
    <h1>Edit Comment</h1>
    <form action="/update-comment/{{$comment->id}}" method="POST">
        @csrf
        <input type="hidden" value="{{$comment->post_id}}"name="post_id">
        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="content" rows="4" cols="50">{{ $comment->content }}</textarea><br>
        <button type="submit">Update Comment</button>
    </form>
</body>
</html> --}}
@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')
 
    <div class="content">

        <div class="content-1">

            <h1>Edit Comment</h1>
            <form action="/update-comment/{{$comment->id}}" method="POST">
                @csrf
                <label for="comment">Comment:</label><br>
                <input type="hidden" name="post_id" value="{{$comment->post_id}}">
                <textarea id="comment" name="content" rows="4" cols="50">{{ $comment->content }}</textarea><br>
                <button type="submit">Update Comment</button>
            </form>

        </div>

        <div class="content-2">
            <p>
                Hier kommen die anderen
            </p>
        </div>

    </div>

@endsection

@section('footer')
@endsection