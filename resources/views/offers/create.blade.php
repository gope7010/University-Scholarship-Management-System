 @extends('university')
    @section('title','Add an offer')
    @section('offers')

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 12px;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 15px;
  background-color: #f2f2f2;
  padding: 6px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 60%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
  <form  action="{{route('offers.store', ['name'=>$university[0]->name])}}" method = "post">
   {{ csrf_field() }}

  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Offer name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="program">Program</label>
    </div>
    <div class="col-75">
      <select name = "program" id = "program" required>
                     <option value="Undergraduate">Undergraduate</option>
                     <option value="Postgraduate">Postgraduate</option>
                </select> 
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="department">Department</label>
    </div>
    <div class="col-75">
      <select name = "department" id = "department" required>
                     <option value="CSE">CSE</option>
                     <option value="EEE">EEE</option>
                     <option value="CSE">BBA</option>
                     <option value="EEE">CSSE</option>
                     <option value="CSE">SE</option>
                     <option value="EEE">LAW</option>
                </select> 
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="session">Session</label>
    </div>
    <div class="col-75">
      <select name = "session" id = "session" required>
                     <option value="Spring">Spring</option>
                     <option value="Summer">Summer</option>
                     <option value="Fall">Fall</option>
                     
                </select> 
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="waiver">Waiver</label>
    </div>
    <div class="col-75">
      <select name = "waiver" id = "waiver" required>
                   
                     <option value="100%">100%</option>
                     <option value="75%">75%</option>
                     <option value="50%">50%</option>
                     
                </select> 
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="requirement">Requirement</label>
    </div>
    <div class="col-75">
      <textarea id="requirement" name="requirement"  style="height:200px"></textarea>
    </div>
  </div>
  <input type="hidden" name="postby" value = "{{$university[0]->name}}">
  <div class="col-75">
    <input type="submit" value="Submit">
  </div>


  </form>
</div>
</body>
</html>


@endsection
