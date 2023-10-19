@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')
    <div class="content">
        <div class="content-1">

                
            <H2>{{$post ->title}}</h2>
            <br>
            <p>{{$post -> content}}</p>
            {{-- DEV ONLY
                <p>the id is {{$post -> id}}</p> 
            --}}
            <br>
            
            @auth
                
            @if (auth()->check())
                
                @if(auth()->user()->id == $post->user_id)
                    
                <a href="/post_bearbeiten/{{$post -> id}}"><h4>Bearbeiten</h4></a>
                <form action="/deletePost/{{$post ->id}}" method="post">
                    @csrf
                    <input type="submit" value="Post Löschen">
                </form>
                @endif 
            @endif  
            
            @endauth
            <br>
            <h3>Comments</h3>
            <br>
            <ul>

                @foreach($post->comments as $comment)
                    <li>{{ $comment->content }}</li>
                    <br><br>
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

    @auth()

        <div class="content-1">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Create a Comment</h3></div>

                        <br>
                        <div class="card-body">
                            <form method="POST" action="/new_comment/{{$post ->id}}">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="post_id" value="{{$post ->id}}">

                                <div class="form-group">
                                    <label for="content"></label>
                                    <textarea id="content" name="content" class="form-control" required></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary"><h4>Post Comment</h4></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
    </div>

@endsection

@section('footer')
@endsection


