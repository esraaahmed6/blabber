@extends('layouts.app')
@section('content')
        <div class="container">

    <div class="row">

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
 
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
           <form action="/read/{{$article->id}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">

              <label for="usr"></label>

              <textarea rows="4" cols="50"  name="body" class="form-control">
              </textarea>
            </div>
          <input type="submit" value="add comment" class="btn btn-primary"/>
        </form>
          
          </div>
        </div>
        </div>
        <!-- Single Comment --> 
  @foreach($article->comments as $c)
  <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
             <div class="media-body">
            <h5 class="mt-0">{{ $c->user->name }}</h5>
                {{$c->comment}}
          </div>
      </div>
        </div>
              @endforeach
    </div>
</div>
</div>
@endsection