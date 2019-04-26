@extends('layouts.app')
@section('content')
    
      <!-- Post Content Column -->
      <div class="col-lg-12">

        <!-- Title -->
        <h2 class="card-title">{{$article->title}}</h2>

        <!-- Author -->
        <p class="lead">
          by 
          <a href="#">{{$article->user->name}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{ $article->created_at->toDayDateTimeString() }}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="upload/{{$article->url}}" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">{{$article->body}}</p>
        <hr>

        <div class="form-group">
 <!-- Single Comment --> 
  @foreach($article->comments as $c)
        <div class="media mb-4">
         
        
          <div class="media-body">
            <h5 class="mt-0"> {{ $c->user->name }}</h5>
           {{$c->comment}}
          </div>

        </div>
              @endforeach
        <!-- Comments Form -->
        
        </div>
    </div>
@endsection