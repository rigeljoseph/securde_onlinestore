@extends('layouts.app')

@section('content')
 

<div >

<div class="modal-body row" style="margin-right:20px; margin-left:20px;margin-top:100px;">
<div class="col-md-8">
  <!-- Your first column here -->
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Items</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">cool shirt</th>  <!-- insert from cart loop-->
      <td>20 pesos</td>
      <td>3</td>
      <td><button type="button" class="btn btn-outline-danger"> X</button></td>  <!-- delete item-->
    </tr>
    <tr>
      <th scope="row">cool pants</th>
      <td>20 pesos</td>
      <td>3</td>
      <td><button type="button" class="btn btn-outline-danger">X</button></td>  <!-- delete item-->
    </tr>
    <tr>
    <th scope="row">another cool shirt</th>
    <td>20 pesos</td>
    <td>3</td>
    <td><button type="button" class="btn btn-outline-danger">X</button></td>  <!-- delete item-->
    </tr>
  </tbody>
</table> 
</div>
<div class="col-md-4">
  <!-- Your second column here -->
  <table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">ORDER SUMMARY</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Total:</th>  <!-- insert from cart loop-->
      <td>100 pesos</td>
     
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
      <button type="button" style="background-color:#468499" class="btn btn-secondary btn-lg btn-block">
      CHECKOUT</button></th>  <!-- checkout confrimation-->
      <td></td>
     
    </tr>
  </tbody>
</table> 
</div>
</div>

</div>

@endsection