@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')
    <div class="content">
        <div class="content-1">

                
            <H1>{{$post ->title}}</h1>
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
            <h2>Comments</h2>
            <ul>

                @foreach($post->comments->sortByDesc('created_at') as $comment)
                    {{-- <li><h4>{{ $users->name}}</h4></li> --}}   
                    @if(auth()->check())
                        <br><br>
                        <li><h4>{{ $comment->user->name }} {{ $comment->updated_at }}</h4>
                        <li>{{ $comment->content }}</li>

                        @if(auth()->user()->id == $comment->user_id)

                        <a href="/kommentar_bearbeiten/{{$comment -> id}}"> Bearbeiten</a>
                        <form action="/deleteComment/{{$comment ->id}}" method="post">
                            @csrf
                            <br><br>
                            <input type="submit" value="Löschen" class="submit-btn">
                            <br><br>
                        </form>
                        @endif

                    @else
                        <br><br>
                        <li><h4>{{ $comment->user->name }} {{ $comment->updated_at }}</h4>
                        <li>{{ $comment->content }}</li>
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


                            <div class="form-group">
                                <label for="content"></label>
                                <textarea id="content" name="content" class="form-control" required></textarea>
                            @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="post_id" value="{{$post ->id}}">
                                <br>
                                <input type="submit" class="submit-btn" value="Post">
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


