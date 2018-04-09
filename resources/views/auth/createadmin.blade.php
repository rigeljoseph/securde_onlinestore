@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Promote to admin') }}</div>
                <div class="card-body">
                <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">User Type</th>
      <th scope="col">Order Date</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1241</th>  <!-- insert from cart loop-->
      <td>John</td>
      <td>Customer</td>
      <td><button type="button" class="btn btn-outline-success">Promote To Admin</button></td>  <!--Reject order-->
    </tr>
  


    </tbody>
</table> 
                     
            </div>
        </div>
    </div>
</div>
@endsection
