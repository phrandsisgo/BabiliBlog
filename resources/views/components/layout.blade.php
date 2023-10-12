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
<div class="sidepanel">
    <a href="{{ route('welcome') }}">Welcome</a>
    <a href="{{ route('post') }}">Post</a>
    <a href="{{ route('article') }}">Article</a>
</div>
<div class="main">
<div class="header">
    <h1>TechWizzards</h1>
</div>             

         
@yield('content')
</div>
@yield('footer')
        {{-- <p>&copy; 2023 TechWizzards</p> --}}

</body>
</html>