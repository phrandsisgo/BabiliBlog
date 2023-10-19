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
{{--            TO DO IF TIME LEFT 
            <a href="{{ route('welcome') }}">Category 1</a>
            <a href="{{ route('welcome') }}">Category 2</a> --}}

            <a href="{{ route('myfeeds', ['userId' => auth()->user()->id]) }}">My Feeds</a>

            <a href="{{ route('create_post') }}">New Blog</a>
            <a href="{{ route('article') }}">Account</a>  
            <a href="{{ route('impressum') }}">Impressum</a>  
            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <button type="submit">Logout</button>
            </form>  
        </div>

        @else
        <div class="sidepanel">
            <a href="{{ route('welcome') }}">Main</a>
{{--            TO DO IF TIME LEFT 
            <a href="{{ route('welcome') }}">Category 1</a>
            <a href="{{ route('welcome') }}">Category 2</a> --}}
            <a href="{{ route('login') }}">Login</a>            
            <a href="{{ route('register') }}">Register</a>
            <a href="{{ route('impressum') }}">Impressum</a>  
        </div>
        
        @endif
    </div>
    
    <div class="main">
        <div class="header">
            <a hreaf="{{ route('welcome') }}"><h1>TechWizzards</h1></a>
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