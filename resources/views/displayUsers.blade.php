@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

<div class="content">
    <div class="content-1">

    <div> 
        <h1>User Profile</h1>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>User created at: {{ date('d.m.y', strtotime($user->created_at)) }}</p>

    <!-- Display user profile picture if available -->
        @if ($user->profile_picture)
            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" width="150px" height="150px">
        @endif

        <p>the User ID is {{$user -> id}}</p>
    </div>


    <form action="{{ route('upload_img') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <button type="button" class="submit-btn" onclick="document.getElementById('profile_picture').click();">Choose File</button>
        <input type="file" name="profile_picture" class="picture-input" id="profile_picture" style="display: none;">
        
        <br><br>
    
        <button type="submit" class="submit-btn">Save Image</button>
    </form>

{{--    OLD CODE!!!
        <form action="{{route('upload_img')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="profile_picture">
        <button type="submit">Save Image</button>
    </form> --}}
    
    
    </div>
</div>
@endsection

@section('footer')
@endsection
