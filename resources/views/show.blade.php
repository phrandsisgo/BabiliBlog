{{-- WRITTEN BY SCARRUS --}}

@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

    <div class="content">

    {{-- @foreach ($posts as $post)  --}}
        <div class="content-1">
            <h1> {{$post ->title}}</h1>
            <p>{{$post -> content}}</p>
            <p>the id is {{$post -> id}}</p>
            <br><br>
            <h2>Comments</h2>
            <ul>
                @foreach($post->comments as $comment)
                <br>
                    <h4>The User</h4>
                    <li>{{ $comment->content }}</li>
                @endforeach
            </ul>
        </div>
    </div>


    {{-- @endforeach --}}
@endsection

@section('footer')
@endsection