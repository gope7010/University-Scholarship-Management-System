    @extends('layouts.master')
    @section('title','Offers Lists')
    @section('content')
      <div class="row">
        <div class="col-sm-12">
          <table class="table">
            <tr>
              <th>ID</th>
              <th>Offer Name</th>
              <th>Program Students</th>
              <th>Waiver Type</th>
            </tr>
            @foreach($offers as $offers)
              <tr class = "text-center">
                <td>{{ $offers->id }}</td>
                <td>{{ $offers->name }}</td>
                <td>{{ $offers->program }}</td>
                <td>{{ $offers->waiver }}</td>
                
                <td><a href="{{route('offers.edit',['id'=>$offers->id])}}" class = "btn btn-info">Edit</a></td>
                <td><a href="{{route('offers.destroy',['id'=>$offers->id])}}" class = "btn btn-danger">Delete</a></td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    @endsection