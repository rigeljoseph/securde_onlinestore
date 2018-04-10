@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Invoice List') }}</div>
          <div class="card-body">
            <div class="p-2"></div>
            <table class="table">
                <thead class="table-primary">
                <tr>
                  <th scope="col">Purchase ID</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Total Cost</th>
                  <th scope="col">Order Date</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="col">1</td>
                    <td scope="col">Sam Chua</td>
                    <td scope="col">B37 L2 P2 Ciudad de San Jose</td>
                    <td scope="col">200.00 PHP</td>
                    <td scope="col">04/10/2018</td>
                    <td scope="col"><button type="button" onclick="" class="btn btn-success">Fulfill</button></td>
                    <td scope="col"><button type="button" onclick="" class="btn btn-danger">Reject</button></td>
                  </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  @endsection