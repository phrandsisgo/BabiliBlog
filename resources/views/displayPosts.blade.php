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

<!-- Folgendes muss ein Button -->
        <button class="view-button">
            <a href="/show/{{$post->id}}">View Show</a>
        </button>

        
            <h4><a href="/show/{{$post->id}}">View Show</a></h4>
        




    </div>
    @endforeach
    </div>


    {{-- @endforeach --}}
@endsection

@section('footer')
@endsection