
@extends('/components/layout')


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
@endsection