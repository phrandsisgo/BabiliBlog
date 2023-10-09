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
        Header Content
    </header>

    <div class="container">
        Container Content
    </div>

    @yield('content')
    <div>
        <h2>This is the content:</h2>
    </div>
    @yield('footer')
        <h3>This is the footer:</h3>


</body>
</html>