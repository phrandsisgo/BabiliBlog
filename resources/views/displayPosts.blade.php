@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

<div class="content">
    <div class="content-2">
        @if (auth()->check())
            <div class="flex-container">
                <h2>Willkommen, {{auth()->user()->name}}</h6>
                <div class="widthX"></div>
                <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Profilbild konnte nicht geladen werden" height="100px" width="100px">
        
            </div>
            @else
            <h2>Willkommen, Gast</h6>
        @endif
    </div>

    @foreach ($posts->sortByDesc('created_at') as $post) 
    <div class="content-1"> 
        <br>
        {{-- <p class="date">{{ date('d.m.y', strtotime($post->created_at)) }}</p> --}}
        <p class="date">{{ date('d.m.y', strtotime($post->created_at)) }}</p>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <br><br>
        <h4>{{ $post->user->name }}</h4>

{{--    DEV ONLY     
        <p>the id is {{$post -> id}}</p>
        <p>the user ID is: {{$post -> user_id}}</p> 
--}}

        <a href="/show/{{$post->id}}"><br><button class="submit-btn">View</button></a>
    </div>
    @endforeach
</div>
@endsection

@section('footer')
@endsection