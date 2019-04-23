@extends('layouts.app')

<div>

 @section('content')
   <div class="cooon">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                 <div class="panel-body">
                   <div>
                    <div>
 <div class="cooon">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$article->user->name}}</div>

                 <div class="panel-body">
                   <div>
                    <div>


        <div class="form-group">
            <label for="usr">Title:</label>
            {{$article->title}}
        </div>
        <div class="form-group">
            <label for="usr">body:</label>
            {{$article->body}}
        </div>
    </div>
  </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 @endsection
</div>