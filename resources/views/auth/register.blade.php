@extends('/components/layout')


@section('head')
@endsection

@section('header')
@endsection

@section('content')

    <div class="content">

        <div class="content-1">

            <h1>Register</h1>
            <br><br>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
            
                    <!-- Name -->
                    <div>
                        <br>
                        <x-input-label for="name" :value="__('Name')" /><br>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /><br>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" /><br>
                    </div>
                    <br>
            
                    <!-- Email Address -->
                    <div class="mt-4">
                        <br>
                        <x-input-label for="email" :value="__('Email')" /><br>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" /><br>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" /><br>
                    </div>
                    <br>
            
                    <!-- Password -->
                    <div class="mt-4">
                        <br>
                        <x-input-label for="password" :value="__('Password')" /><br>
            
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" /><br>
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" /><br>
                    </div>
                    <br>
            
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <br>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" /><br>
            
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" /><br>
            
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <br>
            
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
            

                        <x-primary-button class="ml-4 submit-btn">
                            {{ __('Register') }}
                        </x-primary-button>

                        <br><br>

                <p>Du hast schon ein Account? <a href="/register">Melde dich an!</a></p>

                    </div>
                </form>
        </div>
    </div>


@endsection

@section('footer')
@endsection
