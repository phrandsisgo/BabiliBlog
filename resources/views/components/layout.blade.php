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

         
@yield('content')

@yield('footer')
        {{-- <p>&copy; 2023 TechWizzards</p> --}}

</body>
</html>