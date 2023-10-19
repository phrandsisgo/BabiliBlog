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
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
{{--    DEV ONLY
        <p>the id is {{$post -> id}}</p>
        <img src="{{auth()->user()->profile_picture}}" alt=" ">
        <a href="/show/{{$post->id}}"><br><h4>View Show</h4></a>
--}}
        <a href="/show/{{$post->id}}">
            <button class="submit-btn">View</button>
        </a>
    </div>
    @endforeach
</div>
@endsection

@section('footer')
@endsection