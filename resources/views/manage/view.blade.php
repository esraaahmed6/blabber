@extends('layouts.app')


@section('content')

    <h1 class="my-4">Welcome back!
         
        </h1>
  
        <!-- Blog Post -->
        <div class="card mb-4">
         @foreach($articles as $art)
          <div class="card-body">
            <h2 class="card-title">{{$art->title}}</h2>
            <h2 class="card-title">
             <img class="img-fluid rounded" src="upload/{{$art->url}}" alt="">
           </h2>
            <p class="card-text"> {{ $art->body}} </p>
            <a href="{{ "/read/".$art->id}}"" class="btn btn-primary">Read More &rarr;</a>

       
        <!--like&&dislike -->
                  
          </div> 
          <div class="card-footer text-muted">
            <p>
            <span class="glyphicon glyphicon-time"></span>   
            Posted on {{ $art->created_at->toDayDateTimeString() }} by
             <a href="{{"/userProfile/".$art->user->id }}" >{{$art->user->name}}</a>
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