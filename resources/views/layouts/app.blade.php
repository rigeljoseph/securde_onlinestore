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
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
    <link href="{{ asset('css/fonts/roboto_condensed.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/fonts/roboto.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/fonts/raleway.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/fonts/raleway_dots.css') }}" rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  @yield('style')
</head>
<body>
    <div>
    
     @include('inc.navbar')
    @yield('content')
    </div>

       
</body>
</html>
