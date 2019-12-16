    @extends('layouts.master')
    @section('title','Edit Employee')
    @section('content')
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <form action="{{route('employees.update')}}" method = "post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="firstname">Firstname:</label>
              <input type="text" name = "firstname" id = "firstname" class="form-control" required value = "{{$employee->firstname}}">
            </div>
            <div class="form-group">
              <label for="lastname">Lastname:</label>
              <input type="text" name = "lastname" id = "lastname" class="form-control" required value = "{{$employee->lastname}}">
            </div>
            <div class="form-group">
              <label for="department">Department:</label>
              <input type="text" name = "department" id = "department" class="form-control" required value = "{{$employee->department}}">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="text" name = "phone" id = "phone" class="form-control" required value = "{{$employee->phone}}">
            </div>
            <input type="hidden" name="id" value = "{{$employee->id}}">
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    @endsection