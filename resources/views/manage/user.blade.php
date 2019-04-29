@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>USER</h4></div>
                <div class="panel-body"> 

                  <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                      <div class="panel-heading">Manage All Users</div>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $us)
                          <tr>
                            <th scope="row">{{$us->id}}</th>
                            <td>{{$us->name}}</td>
                            <td>{{$us->email}}</td>
                            <td>

                              <a href="{{ "/block/".$us->id}}" class="btn btn-danger">Delet</a> 
                              
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
@extends('layouts.app')

