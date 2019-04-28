@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 ">
  <div class="panel panel-default">
  <div class="panel-heading">Control</div>
                
    <h1 class="panel-header"> Statistics
     <small>Blog Statistics</small>
    </h1>
    <div>

    <table class="table table-hover">
                           
       <tr>
       <td>All users</td>
      <td>{{$users}}</td>
     </tr>        
     <tr>
       <td>All Articles</td>
      <td>{{$articles}}</td>
     </tr>        
     <tr>
       <td>All Comments</td>
      <td>{{$comments}}</td>
     </tr>  
     <tr>
       <td>Most active user</td>
      <td>{{$comments}}</td>
     </tr>           
     </table>
    </div> 
       </div>
   </div>
</div>

@endsection
