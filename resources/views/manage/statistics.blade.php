@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Control</h4></div>
                <div class="panel-body"> 

                  <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                      <div class="panel-heading"> Blog Statistics</div>

                      <table class="table">
                        
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
                       

                     
                      </table>
                    </div> 
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
