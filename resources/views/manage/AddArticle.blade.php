
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="add" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="usr">title:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="usr">body:</label>
                <textarea rows="4" cols="50"  name="body" class="form-control">
      </textarea>
            </div>
            <div class="form-group">
                <label for="url">image</label>
                <input id="url" type="file" name="url">
      </textarea>
            </div>

            </br>

            <input type="submit" value="add new" class="btn btn-primary"/>
        </form>

    </div>

@endsection
