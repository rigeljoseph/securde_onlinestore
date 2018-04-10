@extends('layouts.app')
@section('style')
<link href="{{ asset('css/body.css') }}" rel="stylesheet"> 
@endsection



@section('content')
@include('inc.navitems')
@foreach ($items as $items)

<div class="modal-body row" style="margin-right:20px; margin-left:20px;margin-top:50px;">
<div class="col-md-8">
  <!-- Your first column here -->
  <table class="table">
  <thead >
    <tr>
      <th scope="row"><center> <img src="{{ asset($items->photo) }}"  
              class="img-fluid img-thumbnail "
             style="height:500px; width:500px;"></center>     </th>
   
    </tr>
  </thead>
  
</table> 
</div>


<div class="col-md-4" style="margin-top:200px; ">
  <!-- Your first column here -->
  <table class="table"style="border:0;" >

  <tbody>
    <tr>
      <th scope="row"><center>{{$items->name}} - P{{$items->price}}</center></th>  <!-- insert from cart loop-->
   
  </tr>
    <tr>
      <th scope="row"><center>{{$items->description}}</center></th>
    
    </tr>

  </tbody>
</table> 
</div>
<div>

@endforeach
@endsection
