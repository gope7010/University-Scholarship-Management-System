    @extends('university')
    @section('title','Update an Offer')
    @section('offers')


    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"> <h3>Update Offer Information </h3> </div>

      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 offset-sm-2">
          <form action="{{route('offers.update',['id'=> $offers->id])}}" method = "post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Offer Name:</label>
              <input type="text" name = "name" id = "name" class="form-control" required value = "{{$offers->name}}">
            </div>
            <div class="form-group">
              <label for="program">Program Name:</label>
              <select name = "program" id = "program" class="form-control" required value = "{{$offers->program}}">
                     <option value="bsc">Undergraduate</option>
                     <option value="msc">Postgraduate</option>
                </select> 
            </div>
            <div class="form-group">
              <label for="waiver">Waiver:</label>
              <select name = "waiver" id = "waiver" class="form-control" required value = "{{$offers->waiver}}">
                     <option value="half">Half</option>
                     <option value="full">Full</option>
                </select>
            </div>
            <input type="hidden" name="id" value = "{{$offers->id}}">
            <input type="hidden" name="postby" value = "{{$offers->postby}}">
             <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
            <button type = "submit" class = "btn btn-success" >Submit</button>
          </div>
        </div>
          </form>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
    @endsection