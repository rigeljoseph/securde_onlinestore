@extends('layouts.app')
@section('style')
<link href="{{ asset('css/body.css') }}" rel="stylesheet"> 
@endsection

@section('content')

@include('inc.navitems')
<div id="p">
 
          <table>
            @foreach ($items as $item)
           @if ($loop->index %4 == 0)
           <tr>
           @endif
           <td>  <img src="{{ asset($item->photo) }}"  
              class="img-fluid img-thumbnail "
             style="height:300px; width:300px; margin-left :100px; margin-top:100px;"><br>
             <center ><p style=" margin-left :100px; ">  {{$item->name}} -  {{$item->price}}</p></center>

            </td>  
            @if ($loop->index %4==3)
           </tr>
           @endif
             
           
            @endforeach
            <table>
           
        </div>
@endsection