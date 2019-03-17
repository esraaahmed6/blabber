
@extends('layouts.app')

<link href="../css/w3.css" rel="stylesheet" type="text/css"/>
<link href="../css/css.css" rel="stylesheet" type="text/css"/>
@section('content')
    <div class="container">
            <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Title</div>

            @foreach($articles as $art)
                <div class="panel-body">
                    <a href="{{ "/read/".$art->id}}">{{$art->title}}</a>
                 
            @endforeach
                </div>

              </div>
        </div>
    </div>
           

         <a href="add"><span style="color:cadetblue"><i class="fa fa-pencil"></i>post</span></a>
    </div>
@endsection


