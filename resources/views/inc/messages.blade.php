@if(count($errors) > 0)
    <div class="container">
        <div class ="col-md-12">
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
        </div>
    </div>
@endif

@if(session('success'))
    <div class="container">
    <div class ="col-md-12">
    <div class="alert alert-success">
            {{session('success')}}
    </div>
    </div>
    </div>
@endif

@if(session('error'))
    <div class="container">
    <div class="col-md-12">
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    </div>
    </div>
@endif