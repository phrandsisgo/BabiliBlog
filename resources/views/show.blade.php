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
                @endif 
            @endif  
            
            @endauth
            <h2>Comments</h2>
            <ul>

                @foreach($post->comments as $comment)
                    <li>{{ $comment->content }}</li>
                    @if(auth()->check())
                        @if(auth()->user()->id == $comment->user_id)
                        <a href="/update-comment/{{$comment -> id}}"> Bearbeiten</a>
                        @endif
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('footer')
@endsection


