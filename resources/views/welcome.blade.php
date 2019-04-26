@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                 <div class="panel-body">
                       
                               <table class="table table-striped">
                                   <tr>
                                       <td> Title</td>
                                   </tr>

                                   @foreach($articles as $art)
                                       <tr>
                                           <td> <a href="{{ "/readg/".$art->id}}">{{$art->title}}</a>
                                           </td>
                  
                                       </tr>
                                   @endforeach

                               </table>
                          
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection


 
