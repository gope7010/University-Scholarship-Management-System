@extends('university')
@section('profile')

<!DOCTYPE html>
<html>
<head>
    
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"> <h3>University Information </h3> </div>
                <div class="panel-body">
                    <label class="col-md-8 control-label">Name : {{$university[0]->name}}</label>    
                </div>
                <div class="panel-body">
                    <label class="col-md-8 control-label">E-Mail Address : {{$university[0]->email}}</label>                  
                </div>
                 <div class="panel-body">
                    <label class="col-md-8 control-label">Address : {{$university[0]->address}}</label>                  
                </div>
                 <div class="panel-body">
                    <label class="col-md-8 control-label">Mobile : {{$university[0]->mobile}}</label>                  
                </div>

                <div class="panel-body">
                <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    Update Your Profile
                                </button>
                            </div>
                        </div>
                         </div>
            </div>
        </div>
    </div>
</div>
</head>
</html>
@endsection
