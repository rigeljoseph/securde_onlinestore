
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/fonts/roboto_condensed.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/fonts/roboto.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/fonts/raleway.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/fonts/raleway_dots.css') }}" rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
</head>
<body>


<!-- NAVIGATION BAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

   
        <div class="collapse navbar-collapse" style="font-size:20px">
        <div style="margin-left:20px">
        <ul class="navbar-nav mr-auto">
            <li class="navbar-item">
                 <a href="/index" id="linkid" class="nav-link">All</a>
            </li>
            <li class="navbar-item">
            <a href="/items" class="nav-link" id="linkid">Top</a>
            </li>
            <li class="navbar-item">
                 <a href="/items" class="nav-link" id="linkid">Pants</a>
            </li>
            <li class="navbar-item">
                 <a href="/items" class="nav-link" id="linkid">Shorts</a>
            </li>
            <li class="navbar-item">
                 <a href="/items" class="nav-link" id="linkid">Jackets and Hoodies</a>
            </li>
        </ul>
        </div>
        </div>
        


    
</nav>

       
</body>
</html>
