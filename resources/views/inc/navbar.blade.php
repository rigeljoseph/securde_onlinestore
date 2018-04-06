
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
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet"> 
</head>
<body>


<!-- NAVIGATION BAR -->
<div class="div_navigation">
<ul>
<li> <a href="/index" id="linkid">HOME </a></li>
<li><a href="/items" id="linkid">ITEMS </a></li>

{{-- LOGIN STUFF --}}

    <form action="login" method="post"  style="float:right">
        <li>   USERNAME: <input type="text" name="email"></li>
        <li>   PASSWORD: <input type="password" name="pword"></li>
         <li>   <input type="submit" value="LOGIN"> </li>
</form> 
        <li style="float:right"> <a href="/register"> REGISTER </a></li>
            {{-- if may session 
            <li> get user name + cart </li>
            --}}
</ul>
     
</div>

       
</body>
</html>
