@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Order Summary') }}</div>
          <div class="card-body">
            <div class="p-2"></div>
            <table class="table">
          
                <thead class="table-primary">
                <tr>
                  <th scope="col" >Purchase ID</th>
                  <th scope="col" >Items</th>
                  <th scope="col">Total Cost</th>
                  <th scope="col">Status</th>
                </tr>
                </thead>
              
                <tbody>
                @foreach($invoice as $invoice)
                <tr>
                <td class="text-uppercase">{{$invoice->invoice_id}}</td>
                <td>
                <ul>
                @foreach($orders as $orders)
              <li>  {{$orders->name}} - P {{$orders->price}}</li>
                @endforeach
                </ul>
                </td>
                <td>P {{$invoice->total_cost}}</td>
                @if($invoice->fulfilled == 0)
                <td>In process</td>
                @elseif($invoice->fulfilled == 1)
                <td>Delivered</td>
                @elseif($invoice->fulfilled == 2)
                <td>Rejected</td>
                @endif
                </tr>

                @endforeach
                </tbody>
               
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection