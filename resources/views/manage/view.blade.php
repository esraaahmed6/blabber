@extends('layouts.app')


@section('content')

    <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
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
                    <!--       @php
              $like_count = 0;
              $dislike_count = 0;
            @endphp
              
            @foreach(@article -> likes as $like)
            @php
             if ($like->like == 1 )
             {
              $like_count++;
             }
             if ($like->like == 0 )
             {
              $dislike_count++;
             }
             @endphp
             @endforeach
            <button type="button" class="btn btn-success">Like
              <b>{{ $like_count}}</b></button>

            <button type="button" class="btn btn-danger">Dislike
            <b>{{ $dislike_count}}</b></button> -->

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


