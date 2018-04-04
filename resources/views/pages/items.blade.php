@extends.('layouts.app')

@section('content')
<div id="photos">
<% for (int n=0; n <2; n++){
    for (int i=0; i <4; i++){%>

    <a href="index.jsp"> <img src="jacket.jpg"<%-- ALL PHOTOS FROM DB, CHANGE SRC--%> alt="Smiley face"> <a>
<% } %>
<br><br>
<% }%>
</div>
@endsection