<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display all the posts</title>
</head>
<body>
@foreach ($posts as $post) 
    <div class="tweet-container"> 
        <p class="date">{{ date('d.m.y', strtotime($post->created_at)) }}</p>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <p>the id is {{$post -> id}}</p>
        <a href="/show/{{$post->id}}">View Show</a>
    </div>
    @endforeach
</body>
</html>

{{-- WRITTEN BY SCARRUS --}}

@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

    <div class="content">

    {{-- @foreach ($posts as $post)  --}}
    @foreach ($posts as $post) 
    <div class="content-1"> 
        <p class="date">{{ date('d.m.y', strtotime($post->created_at)) }}</p>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <p>the id is {{$post -> id}}</p>
        <a href="/show/{{$post->id}}">View Show</a>
    </div>
    @endforeach
    </div>


    {{-- @endforeach --}}
@endsection

@section('footer')
@endsection