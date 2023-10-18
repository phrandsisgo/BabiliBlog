@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')
    <div class="content">
        <div class="content-1">

                
            <H1> {{$post ->title}}</h1>
            <br>
            <p>{{$post -> content}}</p>
            <p>the id is {{$post -> id}}</p>
            <br>
            
            @auth
                
            @if (auth()->check())
                
                @if(auth()->user()->id == $post->user_id)
                    
                <a href="/post_bearbeiten/{{$post -> id}}"> Bearbeiten</a>
                <form action="/deletePost/{{$post ->id}}" method="post">
                    @csrf
                    <input type="submit" value="Post Löschen">
                </form>
                @endif 
            @endif  
            
            @endauth
            <h2>Comments</h2>
            <ul>

                @foreach($post->comments as $comment)
                    <li>{{ $comment->content }}</li>
                    @if(auth()->check())
                        @if(auth()->user()->id == $comment->user_id)
                        <a href="/kommentar_bearbeiten/{{$comment -> id}}"> Bearbeiten</a>
<!---                        <a href="/delete_comment/{{$comment -> id}}"> Löschen</a>-->
                        <form action="/deleteComment/{{$comment ->id}}" method="post">
                            @csrf
                            <input type="submit" value="Löschen">
                        </form>
                        @endif
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="content">
    <div class="content-1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a Comment</div>

                    <div class="card-body">
                        <form method="POST" action="/new_comment/{{$post ->id}}">
                            @csrf

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="post_id" value="{{$post ->id}}">

                            <div class="form-group">
                                <label for="content">Comment</label>
                                <textarea id="content" name="content" class="form-control" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create a Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection


