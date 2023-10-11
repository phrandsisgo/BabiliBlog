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

        <label for="profile_picture">Profile Picture:</label>
        <input type="file" name="profile_picture" id="profile_picture"><br>

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}"><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}"><br>

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
