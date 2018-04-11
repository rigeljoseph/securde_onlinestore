@extends('layouts.app')
@section('style')
<link href="{{ asset('css/body.css') }}" rel="stylesheet"> 
@endsection

@section('content')

@include('inc.navitems')
<div id="p">

          @if(count($items) > 0)
          <table>
            @foreach ($items as $item)
           @if ($loop->index %4 == 0)
           <tr>
           @endif
           <td> <a href="/display/{{ $item->item_id }}"> <img src="{{ asset('storage/item_photos/'.$item->photo) }}"
              class="img-fluid img-thumbnail "
             style="height:300px; width:300px; margin-left :100px; margin-top:100px;"> </a><br>
             <center ><p style=" margin-left :100px; ">  {{$item->name}} -  {{$item->price}} PHP</p></center>

            </td>  
            @if ($loop->index %4==3)
           </tr>
           @endif
             
           
            @endforeach

            <table>
          @else
                    <div class="container">
                        <div class="row m-4">
                            <div class="col-sm">

                            </div>
                            <div class="col-sm">
                                There are no items / Item cannot be found.
                            </div>
                            <div class="col-sm">

                            </div>
                        </div>
                    </div>
          @endif
        </div>
@endsection