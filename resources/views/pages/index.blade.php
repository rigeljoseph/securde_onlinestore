@extends('layouts.app')
@section('style')
<link href="{{ asset('css/body.css') }}" rel="stylesheet"> 
@endsection
@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Lozoda!</h1>
        @if(Auth::check())
            <p>Click on 'Items' on the navigation bar to view what we have for you!</p>

        @else
        <p>Buy all of your essentials here! To get started, please log in.</p>
            @endif
    </div>
@endsection