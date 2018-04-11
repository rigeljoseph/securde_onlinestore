@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Addresses') }}</div>

                    <div class="card-body">
                        <button type="button" onclick="location.href='{{action('AddressesController@create', ['id' => $user])}}'" class="btn btn-secondary">Add Address</button>

                        <div class="p-2"></div>
                        <table class="table">
                            @if(count($addresses) > 0)
                                <thead class="table-primary">
                                <tr>
                                    <th scope="col">Address</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($addresses as $address)
                                    <tr>
                                        <td scope="col">{{$address->address}}</td>
                                        <td scope="col"><button type="button" onclick="location.href='{{action('AddressesController@edit', ['id' => $address->address_id])}}'" class="btn btn-success">Edit</button></td>
                                        <td scope="col"><button type="button" onclick="location.href='{{action('AddressesController@destroy', ['id' => $address->address_id])}}'" class="btn btn-danger">Delete</button></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            @else
                                You currently do not have any addresses added.
                            @endif
                        </table>

                    </div>
                </div>
            </div>
        </div>

@endsection