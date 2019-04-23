@extends('layouts.app')

@section('content')
<head>
      
    <!-- Fonts -->
    

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
      <link href="../css/owl.carousel.min.css" rel="stylesheet" type="text/css">
      <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="../css/bootstrap-reboot.css" rel="stylesheet" type="text/css">
      <link href="../css/bootstrap-grid.css" rel="stylesheet" type="text/css">
      <link href="../css/animate.css" rel="stylesheet" type="text/css">
      <link href="../fonts/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="../fonts/flaticon/font/flaticon.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="   stylesheet">
    
    <style>
           
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    </head>
 <div class="cooon">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                 <div class="panel-body">
                   <div>
                    <div>
                       
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
        </div>
    </div>
 </div>
@endsection
