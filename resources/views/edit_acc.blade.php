<!DOCTYPE html>
<html>
<head>
    <title>Edit Account</title>
</head>
<body>
    <h1>Edit My Account</h1>

    @if ($errors->any())
        <div>
            <strong>Whoops! Something went wrong!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('acc.update') }}">
        @csrf
        @method('PUT')

        <label for="profile_image">Profile Image:</label>
        <input type="file" name="profile_image" id="profile_image"><br>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation"><br>

        <button type="submit">Update Account</button>
    </form>

</body>
</html>
