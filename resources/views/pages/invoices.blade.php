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
                  <th scope="col" >Purchase ID</th>
                  <th scope="col">Total Cost</th>
                  <th scope="col"></th>
             
               
                </tr>
                </thead>
              
                <tbody>
                @foreach($invoice as $invoice)
                <tr>
                <td class="text-uppercase">{{$invoice->invoice_id}}</td>
                <td>P {{$invoice->total_cost}}</td>
                <td >  <button type="button" class="btn btn-info" >
                 <a href="/summary/{{$invoice->invoice_id}}" style="color:white; text-decoration:none;"> 
                Summary </a> </button></td>
                </tr>

                @endforeach
                </tbody>
               
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection