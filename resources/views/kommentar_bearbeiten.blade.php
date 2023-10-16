<!DOCTYPE html>
<html>
<head>
    <title>Edit Comment</title>
</head>
<body>
    <h1>Edit Comment</h1>
    <form action="/update-comment/{{$comment->id}}" method="POST">
        @csrf
        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="content" rows="4" cols="50">{{ $comment->content }}</textarea><br>
        <button type="submit">Update Comment</button>
    </form>
</body>
</html>
