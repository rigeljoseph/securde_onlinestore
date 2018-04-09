@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Item List') }}</div>

          <div class="card-body">
              <button type="button" onclick="" class="btn btn-secondary">Create Item</button>

              <div class="p-2"></div>
            <table class="table">

                <thead class="table-primary">
                <tr>
                  <th scope="col">SKU</th>
                  <th scope="col">Item</th>
                  <th scope="col">Category</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

@endsection