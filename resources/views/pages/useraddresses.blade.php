@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Addresses') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{action('AddressesController@store', ['id' => $user])}}">
                            @csrf

                            <div class="form-group row">
                                <label for="address" class="col-md-1 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-3">
                                    <input id="address" type="text" class="form-control{{ $errors->has('item_id') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-outline-secondary">
                                        {{ __('Add Address') }}
                                    </button>
                                </div>
                            </div>

                        </form>

                        <div class="p-2"></div>
                        <table class="table">
                            @if(count($addresses) > 0)
                                <tbody>
                                @foreach($addresses as $address)
                                    <tr>
                                        <td scope="col">{{$address->address}}</td>
                                        <td scope="col"><button type="button" onclick="location.href='{{action('AddressesController@deleteAddress', ['id' => $address->user_id, 'address' => $address->address_id])}}'" class="btn btn-danger">Delete</button></td>
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