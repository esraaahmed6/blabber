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
                      <div class="panel-heading"></div>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>User ID</th>
                            <th>tittle</th>
                            <th>Body</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        	@foreach($articles as $art)
                          <tr>
                            <th scope="row">{{$art->user_id}}</th>
                            <td>{{$art->title}}</td>
                            <td>{{$art->body}}</td>
                            <td>

                           <!-- <a herf="{{"/delete/".$art->id}}" class="btn btn- pull-center">DELETE</a> -->
                             
                               <a href="{{ "/delete/".$art->id}}" class="btn btn-danger">Delet</a>   
                              
                            </td>
                          </tr>
</div>
                        </tbody>
                        @endforeach
                      </table>
                    </div> 
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection