@extends('university')
@section('profile')

<!DOCTYPE html>
<html>
<head>
    
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"> <h3>Update University Information </h3> </div>
                <div class="panel-body">
                       <form class="form-horizontal" role="form" method="POST" action="{{ route('profile.update') }}">
                        {{ csrf_field() }} {{ method_field('POST') }}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" required value="{{$university[0]->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail_Address</label>

                            <div class="col-md-6">
                                <input type="text" name="email" class="form-control" required value="{{$university[0]->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input type="text" name="address" class="form-control" required value="{{$university[0]->address}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Mobile</label>

                            <div class="col-md-6">
                                <input type="text" name="mobile" class="form-control" required value="{{$university[0]->mobile}}">
                            </div>
                        </div>
                         <input type="hidden" name="id" value = "{{$university[0]->id}}">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Update
                                </button>
                            </div>
                        </div>

                        
                    </form> 
          
                </div>
                </div>
            </div>
        </div>
</div>
</head>
</html>
@endsection
