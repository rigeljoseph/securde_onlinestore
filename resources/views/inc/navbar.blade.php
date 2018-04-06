
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

    <a href="/index" id="linkid" class="navbar-brand">LOZODA </a>
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="navbar-item">
                 <a href="/items" class="nav-link" id="linkid">ITEMS </a>
            </li>
            <li class="navbar-item">
            <a href="/register" class="nav-link" id="linkid">REGISTER </a>
            </li>
        </ul>
        </div>
        

        
{{-- LOGIN STUFF --}}

    <form class="form-inline" action="login" method="post"  style="float:right">
           <input type="text" name="email" class="form-control mr-sm-2"  placeholder="Username" aria-label="Username">
           <input type="password" name="password" class="form-control mr-sm-2"  placeholder="Password" aria-label="Password">
           <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" value="login">LOGIN</button>
</form> 
       {{--  <a href="/register"> REGISTER </a>
           if may session 
            <li> get user name + cart </li>
            --}}

</nav>

       
</body>
</html>
