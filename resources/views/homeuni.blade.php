@extends('layouts.app')
@section('uni')
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  font-family: "Nunito", Nunito;
}

.sidenav {
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 55px;
  left: 10px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  margin-left: 160px; /* Same width as the sidebar + left position in px */
  font-size: 18px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
 
  <a href="{{route('university.profile', ['name' => Auth::user()->name])}}">Profile</a>
  <a href="{{route('offers.create', ['name' => Auth::user()->name])}}">Add an Offer</a>
  <a href="{{route('offers.index', ['name' => Auth::user()->name])}}">Your Offers</a>
  <a href="{{route('applications', ['name' => Auth::user()->name])}}">Requests</a>

  <a href="{{route('approved', ['name' => Auth::user()->name])}}">Approved</a>

  <a href="{{route('app.rejects', ['name' => Auth::user()->name])}}">Rejected</a>
  

  
</div>

<div class="main">
  
  <div class="container box">
  <div class="panel panel-default">
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Offer Name</th>
         <th>Pogram</th>
         <th>Waiver</th>
         <th>Postby</th>
         
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>    
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_offers_data();

 function fetch_offers_data(query = '')
 {
  $.ajax({
   url:"{{ route('search.action',['name' => Auth::user()->name]) }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_offers_data(query);
 });
});
</script>

</div>  

</body>
</html> 


@endsection
