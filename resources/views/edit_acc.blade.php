
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

@section('head')
@endsection

@section('header')
@endsection

<!-- erstellt von Cyrill -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Your Profile</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('edit_acc') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                                </div>
                            </div>
    <form method="POST" action="{{ route('acc.update') }}">
        @csrf
        @method('PUT')

        <label for="profile_image">Profile Image:</label>
        <input type="file" name="profile_image" id="profile_image"><br>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"><br>

                            <div class="form-group row">
                                <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                                <div class="col-md-6">
                                    <input type="file" id="profile_image" name="profile_image" accept="image/*">
                                </div>
                            </div>

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
