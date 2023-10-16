@extends('/components/layout')

@section('head')
@endsection

@section('content')
<div class="content">
        <form method="POST" action="#">
    <div class="content-1">
        <h1>Edit the Post</h1>
            @csrf
            @method('PUT')
        
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" type="text" class="form-control" name="title" value="value" required autofocus>
            </div>
        
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" class="form-control" name="content" required>hier kommt ein langer Text</textarea>
            </div>
        
    </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>

    </div>

@endsection
