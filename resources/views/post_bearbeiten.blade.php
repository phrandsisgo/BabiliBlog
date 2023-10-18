

@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

<div class="content">
    <div class="content-1">
        <div class="content-in">
        <form action="/post_update/{{$post->id}}" method="POST">
            @csrf
            <br>
            <label for="title"><h2>Titel</h2></label>
            <br><br>
            <input type="text" value="{{$post->title}}" name="title" class="form-control formStyle @error('title') is-invalid @enderror title-input">
            <br><br><br>
            <label for="content"><h2>Inhalt</h2></label>
            <br><br>
            <textarea name="content" class="form-control formStyle @error('content') is-invalid @enderror content-input" rows="4">{{ $post->content }}</textarea>
            <br><br>
            <button type="submit"><h4>Speichern</h4></button>
        </form>
        </div>
    </div>
</div>


@endsection

@section('footer')
@endsection