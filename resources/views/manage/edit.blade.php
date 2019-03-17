

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/edit/{{$Article->id}}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="usr">title:</label>
                <input type="text" name="title"  value="{{$Article->title}}"class="form-control">
            </div>
            <div class="form-group">
                <label for="usr">body:</label>
                <textarea rows="4" cols="50"  name="body" value="{{$Article->body}}" class="form-control">{{$Article->body}}
      </textarea>
            </div>

            </br>
            <input type="submit" value="edit" class="btn btn-primary"/>
        </form>

    </div>

@endsection

