@extends('layouts.app')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@section('content')
    <div class="container">


        <div class="form-group">
            <label for="usr">Title:</label>
            {{$article->title}}
        </div>
        <div class="form-group">
            <label for="usr">body:</label>
            {{$article->body}}
        </div>
    </div>
@endsection