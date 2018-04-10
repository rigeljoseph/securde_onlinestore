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


<div class="col-md-4" style="margin-top:50px; ">
  <!-- Your first column here -->
  <table class="table" >

  <thead class="table-primary">
    <tr>
      <th scope="row"><center><p class="text-uppercase" style=" font-size: 35px;">{{$items->name}} </p></center></th>  <!-- insert from cart loop-->
   
  </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row"><center><p class="text-uppercase font-weight-normal" style=" font-size: 20px;"> P {{$items->price}}</p></center></th>
    
    </tr>
    <tr>
      <th scope="row"><center><p class="text-uppercase font-weight-normal" style=" font-size: 20px;">{{$items->description}}</p></center></th>
    
    </tr>
    <tr>
      <th scope="row"  class="text-uppercase font-weight-normal" style=" font-size: 20px;"><center>AMOUNT TO PUCHASE: <input type = "number" min="0"style=" font-size: 20px; width:50px;"></input>
</center></th>
    
    </tr>
    <tr>
      <th scope="row"><center><button class="btn btn-info btn-md font-weight-normal" 
      data-toggle="modal" data-target="#exampleModal" 
      style=" font-size: 20px; background-color:#B8DAFF; color:black;">Add to Cart</button></center></th>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-footer">
      <button type="button" class="btn btn-success">YES</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
      </div>
    </div>
  </div>
</div>
    
    </tr>

  </tbody>
</table> 
</div>
<div>

@endforeach
@endsection