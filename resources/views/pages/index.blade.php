@extends('layouts.app')
@section('style')
<link href="{{ asset('css/body.css') }}" rel="stylesheet"> 
@endsection
@section('content')

<div id="photos">
            
            <? for( $n=0; $n<4; $n++){ ?>
           
                <a href="index.jsp"> <img src=""> </a>
            
                <? } ?>
        
    
        </div>

@endsection