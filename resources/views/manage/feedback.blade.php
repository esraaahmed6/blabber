@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Control</h4></div>
                <div class="panel-body"> 

                  <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                      <div class="panel-heading"></div>

                      <table class="table">
                        <thead>
                          <tr>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Message</th>

                         </tr>            
                       </thead>
                       <tbody>
                        @foreach($feedback as $fd)
                        <tr>
                          <th scope="row">{{$fd->name}}</th>
                          <td>{{$fd->email}}</td>

                          <td>{{$fd->message}}</td>

                        </tr>
                      </div>
                    </tbody>
                    @endforeach
                   </table>
                 </div> 
               </div>

             </div>
           </div>
        </div>
    </div>
</div>
@endsection
