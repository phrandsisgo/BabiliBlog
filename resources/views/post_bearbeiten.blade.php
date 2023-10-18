

@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

<div class="content">
    <div class="content-1">
        <form action="/post_update/{{$post->id}}" method="POST">
            @csrf
            <br>
            <label for="title">Titel</label>
            <br><br>
            <input type="text" value="{{$post->title}}" name="title" class="form-control formStyle @error('title') is-invalid @enderror title-input">
            <br><br><br>
            <label for="content">Inhalt</label>
            <br><br>
            <textarea name="content" class="form-control formStyle @error('content') is-invalid @enderror content-input" rows="4">{{ $post->content }}</textarea>
            <br><br>
            <button type="submit">Speichern</button>
        </form>
    </div>
</div>


@endsection

@section('footer')
@endsection