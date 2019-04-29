@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                 @if(isset($details))
                <div class="panel-heading"><h1>Search Result</h1></div>
                <div class="panel-body"> 

                  <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                      <div class="panel-heading"></div>

                 <table class="table">
                    <thead>
                          <tr>
                            <th></th>
                            <th>Tittle</th>
                            <th>Body</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($details as $article)
                        <tr>
                            <th scope="row"></th>
                            <td>{{$article->title}}</td>
                            <td>{{$article->body}}</td>
                        </tr>
                       </div>
                        </tbody>
                        @endforeach
                      </table>
                     
                    </div> 
                  </div>

                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection