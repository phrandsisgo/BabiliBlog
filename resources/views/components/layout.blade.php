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
    
    <header class="header">
        <div class="header-content">
            <h1>Sticky Header</h1>
        </div>
    </header>

{{--     <div class="container">
        Container Content
    </div> --}}

    @yield('content')
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla dictum libero, eu convallis sapien. Fusce ut sollicitudin velit. Donec ac sagittis elit.</p>
    </div>
    @yield('footer')
        <h3>This is the footer:</h3>

</body>
</html>