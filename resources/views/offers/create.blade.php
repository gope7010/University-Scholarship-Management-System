    @extends('university')
    @section('title','Add an offer')
    @section('offers')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"> <h3>Offer Information </h3> </div>

      <div class="panel-body">
        <div class="col-sm-4 offset-sm-2">
          <form action="{{route('offers.store', ['name'=>$university[0]->name])}}" method = "post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="firstname">Name:</label>
              <input type="text" name = "name" id = "name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="lastname">Program:</label>
               <select name = "program" id = "program" class="form-control" required>
                     <option value="bsc">Undergraduate</option>
                     <option value="msc">Postgraduate</option>
                </select> 
            </div>
            <div class="form-group">
              <label for="department">Waiver:</label>
               <select name = "waiver" id = "waiver" class="form-control" required>
                     <option value="half">Half</option>
                     <option value="full">Full</option>
                </select> 
            </div>
            <input type="hidden" name="postby" value = "{{$university[0]->name}}">
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>

    @endsection