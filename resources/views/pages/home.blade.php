@extends.('layouts.app')

@section('content')
<div id="photos">
            <% for (int n=0; n <1; n++){
                for (int i=0; i <1; i++){%>
         
                <a href="index.jsp"> <img src=""<%-- INSERT PHOTOS FROM DB, CHANGE SRC--%> > <a>
                 <a href="index.jsp"> <img src=""<%-- INSERTPHOTOS FROM DB, CHANGE SRC--%> > <a>         
                  <a href="index.jsp"> <img src=""<%-- INSERTPHOTOS FROM DB, CHANGE SRC--%>> <a> 
                         <a href="index.jsp"> <img src="g"<%-- INSERT PHOTOS FROM DB, CHANGE SRC--%> > <a>       
            <% } %>
            <br><br>
           <% }%>
        </div>
@endsection