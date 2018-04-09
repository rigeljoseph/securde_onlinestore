@extends('layouts.app')
@section('style')
<link href="{{ asset('css/body.css') }}" rel="stylesheet"> 
@endsection

@section('content')

@include('inc.navitems')
<div id="photos">
            <? for ( $n=0; $n<2; $n++){
                for ( $i=0; $i<4; $i++){ ?>
           
           <img src="{{ asset('img/cart.png') }}"  
            class="img-fluid img-thumbnail "
             style="height:300px; width:300px; margin-left :100px; margin-top:50px;">
             
              
            
                <? } ?>
            <br><br>
           <? } ?>
        </div>
@endsection