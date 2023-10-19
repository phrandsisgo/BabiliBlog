@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

<div class="content">

    <div class="content-1">

        
        <h1>New Blog</h1>
        <br><br>

        <form action="/store_post" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

            <label for="title"><h2>Titel</h2></label>
            <input type="text" id="title" name="title">
            <br><br><br>

            <label for="text"><h2>Post</h2></label>
            <textarea name="content" id="post" cols="30" rows="10"></textarea>
            <br><br><br>

            <button type="submit" class="submit-btn">Send</button> 
        </form>
    </div>
</div>

@endsection

@section('footer')
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babili Blog</title>
</head>
<body>
            <form action="/store_post" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                <label for="title">Title:</label>
                <input type="text" id="title" name="title"><br><br>

                <label for="text">Post:</label>
                
                <textarea name="content" id="post" cols="30" rows="10"></textarea>
                <button type="submit">Send</button> 
            </form>
        </div>
</body>
</html> --}}