@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            	<div><tr><form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search Articles"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
</tr></div>

    @if(isset($details))
       <!-- <p> The Search results for your query <b> {{ $query }} </b> are :</p>-->
    <h2 style="text-align: left;">Search Result</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>title</th>
                <th>body</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->body}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif


            </div>
        </div>
    </div>
</div>
@endsection
