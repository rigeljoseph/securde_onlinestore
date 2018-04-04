@extends.('layouts.app')

@section('content')
<div id="reg">
<table>
  <form action="register" method="post"  >
      <tr> <td>FIRST NAME: </td><td><input type="text" name="f_name"></td></tr>
  <tr> <td>LAST NAME:  </td><td><input type="text" name="l_name"></td></tr>
 <tr> <td>EMAIL: </td><td><input type="text" name="email"></td></tr>
 <tr> <td>PASSWORD: </td><td><input type="password" name="pword"></td></tr>
 <tr><td> <input type="submit" value="SUBMIT"></td></tr>
</table>

  
</form> 

</div>

@endsection