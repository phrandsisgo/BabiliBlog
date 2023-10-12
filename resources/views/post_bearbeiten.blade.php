<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tPost bearbeiten</title>
</head>
<body>
    <form action="/post_update/{{$post->id}}" method = "POST">
        @csrf
        <label for="title">Titel</label>
        <input type="text" value="{{$post-> title}}" name="title"class="form-control formStyle @error('title') is-invalid @enderror">
        <br>
        <label for="content">Inhalt</label>
        <input type="text" value="{{$post-> content}}" name="content" class="form-control formStyle @error('content') is-invalid @enderror">
        <br>
        <button type="submit">Speichern</button>
    </form>    
</body>
</html>