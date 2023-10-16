<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Profile</title>
</head>
<body>

    <div> 
        <h1>User Profile</h1>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>User created at: {{ date('d.m.y', strtotime($user->created_at)) }}</p>


    <!-- Display user profile picture if available -->
        @if ($user->profile_picture)
            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture">
        @endif

        <p>the User ID is {{$user -> id}}</p>
    </div>


    <form action="{{route('upload_img')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="profile_picture">
        <button type="submit">Save Image</button>
    </form>
    


</body>
</html>