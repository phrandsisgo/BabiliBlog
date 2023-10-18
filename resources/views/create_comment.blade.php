@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Comment</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('comments.create_comment') }}">
                        @csrf

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <label for="content">Comment</label>
                            <textarea id="content" name="content" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Create a Comment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
