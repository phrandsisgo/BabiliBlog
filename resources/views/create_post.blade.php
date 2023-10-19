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



{{-- @extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')
 
    <div class="content">

        <div class="content-1">

            <h1>Edit Comment</h1>
            <br>
            <form action="/update-comment/{{$comment->id}}" method="POST">
                @csrf

                <label for="comment"></label><br>

                <textarea id="comment" name="content" rows="4" cols="50">{{ $comment->content }}</textarea><br>
                <br>
                <button type="submit" class="submit-btn">Post</button>
                <br><br>
            </form>

        </div>

    </div>

@endsection

@section('footer')
@endsection --}}