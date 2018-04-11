@extends('layouts.app')

@section('content')
 

<div >

<div class="modal-body row" style="margin-right:20px; margin-left:20px;margin-top:100px;">
<div class="col-md-8">
  <!-- Your first column here -->
  <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">Items</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($titles as $titles)
  <tr>
    <th scope="row">{{$titles->name}}</th>  <!-- insert from cart loop-->
    
    <td>P{{$titles->price}}</td>
    <td><button type="button" class="btn btn-outline-danger"> X</button></td>  <!-- delete item-->
  </tr>
  @endforeach
  </tbody>
</table> 
</div>
<div class="col-md-4">
  <!-- Your second column here -->
  <table class="table" >
  <thead class="table-primary">
    <tr>
      <th scope="col">ORDER SUMMARY</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Total:</th>  <!-- insert from cart loop-->
      <td>{{$price}}</td>
     
    </tr>
    <tr>
      <th scope="row">Shipping fee</th>
      <td>FREE  </td>
      
    </tr>
    <tr>
    <th scope="row">Mode of Payment</th>
    <td>
    <!--radio button-->
       <div class="btn-group btn-group-toggle" data-toggle="buttons">
          
            <label class="btn btn-secondary active"style="background-color:#468499" >
             <input type="radio" name="options" id="option1" autocomplete="off" checked> Cash on Delivery
           </label>
             <label class="btn btn-secondary"style="background-color:#468499">
                <input type="radio" name="options" id="option2" autocomplete="off"> Credit Card
          </label>
 
        </div>
    </td>
   </tr>

   <tr>
      <th scope="row">
      <button type="button" style="background-color:#468499" class="btn btn-secondary btn-lg btn-block"
        data-toggle="modal" data-target="#exampleModal" >
      CHECKOUT</button></th>  <!-- checkout confrimation-->
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Purchase Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-footer">
      <button type="button" class="btn btn-success" >
      <a href="/success/{{$price}}" style="color:white; text-decoration:none;"> YES </a> </button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
      </div>
    </div>
  </div>
</div>
    
      <td></td>
     
    </tr>
  </tbody>
</table> 
</div>
</div>

</div>

@endsection