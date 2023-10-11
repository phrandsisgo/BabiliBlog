@extends('/components/layout')


@section('head')
@endsection

@section('header')
<nav class="sidepanel">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Post</a></li>
            <li><a href="#">Thema 1</a></li>
            <li><a href="#">Thema 2</a></li>
            <li><a href="#">Thema 3</a></li>
        </ul>
    </nav>
@endsection

@section('content')
 

<div class="main">
    <div class="header">
        <div>
            <h1>Header</h1>
        </div>
    </div>             
    
    <div class="content">

        <div class="content-1">
            <p>
                Hier kommt der Haupttext
            </p>
        </div>

        <div class="content-2">
            <p>
                Hier kommen die anderen
            </p>
        </div>

        <div class="footer">
            <p>&copy; 2023 TechWizzards</p>
        </div>
    </div>
</div>
        
    


    @endsection

    @section('footer')
    @endsection