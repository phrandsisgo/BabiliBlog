@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

<div class="content">
    <div class="content-1">
        @if (auth()->check())
            <h1>Willkommen, {{auth()->user()->name}}</h1>
        @else
            <h1>Willkommen, Gast</h1>
        @endif
    </div>

    @foreach ($posts as $post) 
    <div class="content-1"> 
        <p class="date">{{ date('d.m.y', strtotime($post->created_at)) }}</p>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <p>the id is {{$post -> id}}</p>
        <p>the user ID is: {{$post -> user_id}}</p>
        <a href="/show/{{$post->id}}">View Show</a>
    </div>
    @endforeach
</div>
@endsection

@section('footer')
@endsection