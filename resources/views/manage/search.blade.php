@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2 style="text-align: left;">Search Result</h2>
 
  
 
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

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

            </div>
        </div>
    </div>
</div>
@endsection
