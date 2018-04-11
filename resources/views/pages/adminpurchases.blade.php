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
              @if(count($invoices) > 0)
                <thead class="table-primary">
                <tr>
                  <th scope="col">Purchase ID</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Total Cost</th>
                  <th scope="col">Order Date</th>
                  <th scope="col">Status</th>
                  <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($invoices as $invoice)
                  <tr>

                    <td scope="col">{{$invoice->invoice_id}}</td>
                    <td scope="col">{{$invoice->user->first_name ." ". $invoice->user->last_name}}</td>
                    <td scope="col">{{\App\Address::where(['address_id' => $invoice->address_id])->pluck('address')->first()}}</td>
                    <td scope="col">{{$invoice->total_cost}}</td>
                    <td scope="col">{{$invoice->created_at}}</td>
                    @if($invoice->fulfilled == 0)
                    <td scope="col"><button type="button" onclick="location.href='{{action('AdminController@setInvoiceFulfilled', ['id' => $invoice->invoice_id])}}'" class="btn btn-success">Fulfill</button></td>
                    <td scope="col"><button type="button" onclick="location.href='{{action('AdminController@setInvoiceRejected', ['id' => $invoice->invoice_id])}}'" class="btn btn-danger">Reject</button></td>
                    @elseif($invoice->fulfilled == 1)
                      <td scope="col">Order Fulfilled</td>
                      <td scope="col"><button type="button" onclick="location.href='{{action('AdminController@setInvoiceUnfulfilled', ['id' => $invoice->invoice_id])}}'" class="btn btn-success">Undo Status</button></td>
                    @elseif($invoice->fulfilled == 2)
                      <td scope="col">Order Rejected</td>
                      <td scope="col"><button type="button" onclick="location.href='{{action('AdminController@setInvoiceUnfulfilled', ['id' => $invoice->invoice_id])}}'" class="btn btn-success">Undo Status</button></td>
                    @endif
                  </tr>
                @endforeach
                @else
                  There are no purchases.
                @endif
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  @endsection