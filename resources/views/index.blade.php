@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')
 
    <div class="content">

        <div class="content-1">
            @foreach ($posts as $post) 
            <div class="content-1"> 
                <p class="date">{{ date('d.m.y', strtotime($post->created_at)) }}</p>
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <p>the id is {{$post -> id}}</p>
                <p>the user ID is: {{$post -> user_id}}</p>
                <a href="/show/{{$post->id}}"><br><h4>View Show</h4></a>
            </div>
            @endforeach
        </div>

        <div class="content-2">
            <p>
                Hier kommen die anderen
            </p>
        </div>

    </div>

@endsection

@section('footer')
@endsection