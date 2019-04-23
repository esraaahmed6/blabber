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
  <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
   <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">{{ Auth::user()->name }}</h4>
         <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
                  <form action="add" method="POST">
                    {{csrf_field()}}

                   <div class="form-group">
                      <label for="usr">title    :  </label>
                      <input type="text" name="title" class="form-control">
                   </div>
                   <div class="form-group">
                     <label for="usr">body:</label>
                     <textarea rows="4" cols="50" name="body" class="form-control">      </textarea>
                    <!-- <textarea rows="4" cols="50"  name="body" class="form-control"> -->
                     </textarea>
                   </div>

                   </br>
                    <input type="submit" value="Post" class="w3-button w3-theme" class="fa fa-pencil"/>
                    </form>
            
            </div>
          </div>
        </div>
      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin">
       
         @foreach($articles as $ar)
         <div >
          <div >
            <div class="w3-container w3-card w3-white w3-round w3-margin" >
              <table>
               
                  <span class="w3-right w3-opacity">{{$ar->created_at}}</span>
                  <h4>{{$ar->user->name}}</h4><br>
                  <tr>      
                    <td> {{$ar->title}}</a>
                    </td> 
                  </tr>
                  <tr>      
                    <td> {{$ar->body}}</a>
                    </td> 
                  </tr>
                  <tr>
                     <td>
                       <a href="{{ "/like/".$ar->id }}" class="w3-button w3-theme-d1 w3-margin-bottom">like</a>
                       <a href="{{ "/like/".$ar->id }}" class="w3-button w3-theme-d1 w3-margin-bottom"> Comment</a>
                     </td>
                  </tr>

              </table>
            </div>
          </div>
         </div>
            @endforeach
      </div>
           



<script>
       $("#addSlider").submit(function(m) {
           $.ajax({
               type: "POST",
               url: '/admin/add/slider',
               data: new FormData( this ),
               processData: false,
               contentType: false,
               success: function(response)
               {
                   if(response=="done"){
                       alert("sssss");
                   }
                   else{
                       alert(response);
                   }
               }
           });
           m.preventDefault(); // avoid to execute the actual submit of the form.
       });

   </script>

   <script>
       $(document).on('click', '.edit_slider', function(){
           var id=$(this).attr('slider_id');

           $.ajax({
               type: "GET",
               url: "/admin/get/slider/" + id,
               processData: false,
               contentType: false,

               success: function(response) {

                   $("#title_1_edit").val(response.title_1);
                   $("#title_2_edit").val(response.title_2);
                   $("#link_edit").val(response.link);
                   $("#Slider_id_edit").val(response.id);



               }
           });
       });
   </script>

   <script>
       $("#editSlider").submit(function(m) {
           $.ajax({
               type: "POST",
               url: '/admin/edit/slider',
               data: new FormData( this ),
               processData: false,
               contentType: false,
               success: function(response)
               {
                   if(response=="done"){
                       alert("done");
                   }
                   else{
                       alert(response);
                   }
               }
           });
           m.preventDefault(); // avoid to execute the actual submit of the form.
       });

   </script>

   <script>
       $(document).on('click', '.delete_slider', function(){
           var id=$(this).attr('slider_id');
           alert(id);
           $.ajax({
               type: "GET",
               url: "/admin/delete/slider/" + id,
               processData: false,
               contentType: false,

               success: function(response) {
                   alert("deleted");



               }
           });
       });
   </script>
@endsection