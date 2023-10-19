@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

<div class="content">
    <div class="content-2">
        @if (auth()->check())
            <h2>Willkommen, {{auth()->user()->name}}</h6>
            <img src="{{auth()->user()->profile_picture}}" alt=" ">

        @else
            <h2>Willkommen, Gast, hier ist ein Grosser Fehler passiert.</h6>
        @endif
    </div>

    @foreach ($posts as $post) 
    <div class="content-1"> 
        <p class="date">{{ date('d.m.y', strtotime($post->created_at)) }}</p>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <p>the id is {{$post -> id}}</p>
        <img src="{{auth()->user()->profile_picture}}" alt=" ">
        <p>the user ID is: {{$post -> user_id}}</p>
        <a href="/show/{{$post->id}}"><br><h4>View Show</h4></a>
    </div>
    @endforeach
</div>
@endsection

@section('footer')
@endsection