@extends('layouts.app')
@section('style')
<link href="{{ asset('css/body.css') }}" rel="stylesheet"> 
@endsection

@section('content')

@include('inc.navitems')
<div id="photos">
            <? for ( $n=0; $n<2; $n++){
                for ( $i=0; $i<4; $i++){ ?>
           
                <a href="index.jsp"> <img src=""> </a>
            
                <? } ?>
            <br><br>
           <? } ?>
        </div>
@endsection