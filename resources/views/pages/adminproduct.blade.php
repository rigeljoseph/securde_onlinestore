@extends('layouts.app')

@section('content')
 

<h1 class="display-4 text-center">List Of Items</h1>

<div class="modal-body row" style="margin-right:20px; margin-left:400px;margin-top:75px;">
<div class="col-md-8">
  <!-- Your first column here -->
  <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">Items</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">cool shirt</th>  <!-- insert from cart loop-->
      <td>20 pesos</td>
      <td>3</td>
      <td><button type="button" class="btn btn-outline-danger"> Remove</button></td>  <!-- delete item-->
      <td><button type="button" class="btn btn-outline-info"> Edit</button></td>  <!-- edit item-->
    </tr>
    <tr>
      <th scope="row">cool pants</th>
      <td>20 pesos</td>
      <td>3</td>
      <td><button type="button" class="btn btn-outline-danger">Remove</button></td>  <!-- delete item-->
      <td><button type="button" class="btn btn-outline-info"> Edit</button></td>  <!-- edit item-->
    </tr>
    <tr>
    <th scope="row">another cool shirt</th>
    <td>20 pesos</td>
    <td>3</td>
    <td><button type="button" class="btn btn-outline-danger">Remove</button></td>  <!-- delete item-->
    <td><button type="button" class="btn btn-outline-info"> Edit</button></td>  <!-- edit item-->
    </tr>

    <tr>
    <th ></th>
    <td></td>
    <td></td>
    <td>
    <td><button type="button" class="btn btn-outline-success"> Add Item</button></td>  <!-- edit item-->
    </tr>
  </tbody>
</table> 
</div>


</div>

@endsection