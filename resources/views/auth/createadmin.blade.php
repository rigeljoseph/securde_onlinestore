@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('User List') }}</div>
                <div class="card-body">
                <table class="table">
                @if(count($users) > 0)
                    <thead class="table-primary">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->username}}</th>  <!-- insert from cart loop-->
                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td><button type="button" class="btn btn-outline-success">Promote</button></td>
                        <td><button type="button" class="btn btn-outline-danger">Delete</button></td><!--Reject order-->
                    </tr>
                    @endforeach
                @else
                    There are no users
                @endif
    </tbody>
</table> 
                     
            </div>
        </div>
    </div>
</div>
@endsection
