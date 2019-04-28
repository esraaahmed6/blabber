@extends('layouts.app')

@section('content')
<div class="container">
<head>
<style>
ul.x {
  list-style-type: none;
  margin: 0px;
 padding: 0px;
 width: 170px;
 
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>
<ul class="x">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="{{ url('/admin') }}">Delete Post </a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>

</div>
@endsection