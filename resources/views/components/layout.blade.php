{{-- WRITTEN BY SCARRUS --}}

@yield('head')

<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.scss')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BabiliBlog</title>
</head>
<body>
    
    @yield('header')
    <div class="side">
    
        @auth       
        <div class="sidepanel">
            <a href="{{ route('welcome') }}">Main</a>
            <a href="{{ route('welcome') }}">Category 1</a>
            <a href="{{ route('welcome') }}">Category 2</a>
            <a href="{{ route('welcome') }}">My Feeds</a>
            <a href="{{ route('post') }}">New Blog</a>
            <a href="{{ route('article') }}">Account</a>        
        </div>

        @else
        <div class="sidepanel">
            <a href="{{ route('index') }}">Main</a>
            <a href="{{ route('welcome') }}">Category 1</a>
            <a href="{{ route('welcome') }}">Category 2</a>
            <a href="{{ route('article') }}">Register</a>
            <a href="{{ route('article') }}">Login</a>            
        </div>
        
        @endif
    </div>
    
    <div class="main">
        <div class="header">
            <h1>TechWizzards</h1>
        </div>             

            
    @yield('content')
        <div class="footer">
            <p>&copy; 2023 TechWizzards</p>
        </div>
    </div>
    @yield('footer')
            {{-- <p>&copy; 2023 TechWizzards</p> --}}

</body>
</html>