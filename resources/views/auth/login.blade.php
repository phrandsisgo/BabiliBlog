@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

    <div class="content">

    {{-- @foreach ($posts as $post)  --}}
        <div class="content-1">

            <h1>Login</h1>
            <br><br>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <br>
                    <x-input-label for="email" :value="__('Email')" /><br>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /><br>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" /><br>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <br>
                    <x-input-label for="password" :value="__('Password')" />

                    <br>
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                    <br>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <br><br>
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="remember-me-label">
                        <input id="remember_me" type="checkbox" class="remember-me-checkbox" name="remember">
                        <span class="remember-me-checkbox-text">{{ __('Remember me') }}</span>
                    </label>
                    <br><br>
                    <button class="submit-btn">
                        {{ __('Log in') }}
                    </button>
                </div>      
            
                <br>
                <p>Noch kein Account dann <a href="/register">registriere dich</a></p>
                <br>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Passwort vergessen?') }}
                        </a>
                    @endif

                </div>
            </form>     

        </div>
        
    </div>


    {{-- @endforeach --}}
@endsection

@section('footer')
@endsection
