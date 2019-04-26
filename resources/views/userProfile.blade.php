@extends('layouts.app')

@section('content')

    <h1 class="my-4">Dashboard
          <small>Welcome {{ Auth::user()->name }} :D Happy for being here</small>
        </h1>
  
        <!-- Blog Post -->
        <div class="card mb-4">
          @foreach($articles as $art)
          <div class="card-body">
            <ul class="pagination  mb-4">

<li  style="padding-right:500px">
            <h2 class="card-title">{{$art->title}}</h2>

            <p class="card-text"> {{ $art->body}} </p>
            
</li>
          <li class="page-item" style="padding-right:5px">
           <a href="{{ "/edit/".$art->id }}" class="btn btn-primary" ><i class="fa fa-pencil"></i>Edit</a>
          </li>
          <li class="page-item disabled">
            <a  href="{{"/delete/".$art->id}}"  class="btn btn-primary">Delete</a>
          </li>
        </ul>
          </div>
          <div class="card-footer text-muted">
            <p>
            <span class="glyphicon glyphicon-time"></span>   
            Posted on {{ $art->created_at->toDayDateTimeString() }} by
            <a href="#">Start Bootstrap</a>
          </p>
          </div>
            
       
         @endforeach
        </div>
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
@endsection

