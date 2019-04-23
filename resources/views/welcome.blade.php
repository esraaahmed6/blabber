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
                               <div class="panel-body1">
                          @foreach($articles as $art)
                               <div class="panel-body2">
                      <div>
                        <div>
                             
                                       <tr>
                                           <td> <a href="{{ "/readg/".$art->id}}">{{$art->title}}</a>
                                           </td>
                  
                                       </tr>
                                       </div>
                           </div>
                            </div>
                                   @endforeach

                               </table>
                          
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection


 
