@extends('layouts.app')

@section('content')
 

<h1 class="display-4 text-center">List Of Orders</h1>


<div class="modal-body row" style="margin-right:20px; margin-left:400px;margin-top:100px;">
<div class="col-md-8">
  <!-- Your first column here -->
  <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">Purchase ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Order Date</th>
      <th scope="col">Total Cost</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1241</th>  <!-- insert from cart loop-->
      <td>John</td>
      <td>april 7, 2018</td>
      <td>100 pesos</td>
      <td><button type="button" class="btn btn-outline-success"> Accept</button></td>  <!-- Accept order-->
      <td><button type="button" class="btn btn-outline-danger"> Reject</button></td>  <!--Reject order-->
    </tr>
    <tr>
    <th scope="row">1242</th>  <!-- insert from cart loop-->
    <td>Johnny</td>
    <td>april 7, 2018</td>
    <td>120 pesos</td>
    <td><button type="button" class="btn btn-outline-success"> Accept</button></td>  <!-- Accept order-->
    <td><button type="button" class="btn btn-outline-danger"> Reject</button></td>  <!--Reject order-->
  </tr>
  <tr>
  <th scope="row">1243</th>  <!-- insert from cart loop-->
  <td>Johnloyd</td>
  <td>april 7, 2018</td>
  <td>130 pesos</td>
  <td><button type="button" class="btn btn-outline-success"> Accept</button></td>  <!-- Accept order-->
  <td><button type="button" class="btn btn-outline-danger"> Reject</button></td>  <!--Reject order-->
</tr>

    </tbody>
</table> 
</div>


</div>

@endsection