@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome {{ Auth::user()->name }} :D Happy for being here 
                </div>
            </div>
            <div class="panel panel-default">
                <table  class="table table-striped">
                <div class="panel-body">
                      @foreach($articles as $ar)
                <tr>
                    <td> {{$ar->title}}</a>
                    </td>
                    <td> {{$ar->body}}</a>
                    </td>
                    <td>
                       <a href="{{"/delete/".$ar->id}}"  class="btn btn-default">Delete</a>
                    </td>
                    <td>
                       
                         <a href="{{ "/edit/".$ar->id }}" class="btn btn-primary" ><i class="fa fa-pencil"></i>Edit</a>
                    </td>
                </tr>
                 
                
                
            @endforeach
            <table>
</div>
            </div>
        </div>
    </div>

@endsection
