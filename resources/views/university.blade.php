@extends('layouts.app')
@section('uni')
<!DOCTYPE html>
<html>
<head>
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
  <a href="#contact">Contact</a>
</div>

<div class="main">
  
   @yield('profile')
   @yield('offers')
</div>  

</body>
</html> 


@endsection
