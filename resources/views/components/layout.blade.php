@yield('head')

<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.scss')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @yield('header')
        <h1>This is the header</h1>

    @yield('content')
        <h2>This is the content</h2>

    @yield('footer')
        <h3>This is the footer</h3>


</body>
</html>