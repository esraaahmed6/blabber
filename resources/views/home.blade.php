@extends('layouts.app')
@section('header')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
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
                       <button href="{{ "manage/delete/{id}"}}" type="button" class="btn btn-default">Delete</button>
                    </td>
                    <td>
                         <a href="{{ "/edit/".$ar->id }}" >edit</a>
                    </td>
                </tr>
                 
                
                
            @endforeach
            <table>
</div>
            </div>
        </div>
    </div>

@endsection
