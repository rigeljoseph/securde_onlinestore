@extends('layouts.app')
@section('style')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection
@section('content')
 

<div id="container" style="margin-left:600px; margin-top:150px;">
<table>
<form action="register" method="post"  >
<input type="text" name="fname" class="form-control form-control-lg"  placeholder="FIRSTNAME" aria-label="FirstName"><br>
<input type="text" name="lname" class="form-control form-control-lg"  placeholder="LASTNAME" aria-label="LastName"><br>
<input type="text" name="email" class="form-control form-control-lg"  placeholder="EMAIL" aria-label="Email"><br>
<input type="password" name="pword" class="form-control form-control-lg"  placeholder="PASSWORD" aria-label="Password"><br>
<input type="password" name="pword1" class="form-control form-control-lg"  placeholder="CONFIRM PASSWORD" aria-label="Password"><br>
<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" value="submit">SUBMIT</button>
</table>

  
</form> 

</div>

@endsection