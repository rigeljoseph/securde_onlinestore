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
                @if(count($items) > 0)
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
                @foreach($items as $item)
                <tr>
                    <td scope="col">{{$item->item_id}}</td>
                    <td scope="col">{{$item->name}}</td>
                    <td scope="col">{{$item->category->category}}</td>
                    <td scope="col"><button type="button" onclick="" class="btn btn-success">Edit</button></td>
                    <td scope="col"><button type="button" onclick="location.href='{{action('AdminController@removeProduct', ['id' => $item->item_id])}}'" class="btn btn-danger">Delete</button></td>
                </tr>
                @endforeach
                </tbody>
                @else
                    There are no users
                @endif
            </table>

          </div>
        </div>
      </div>
    </div>

@endsection