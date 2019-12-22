  
    @extends('university')
    @section('title','Offers Lists')
    @section('offers')

      <div class="row">
        <div class="col-sm-12">
          <table class="table" class = "text-center">
            <tr class = "text-center">
              <th class = "text-center">ID</th>
              <th class = "text-center">Offer Name</th>
              <th class = "text-center">Program </th>
              
              <th class = "text-center">Department </th>
              <th class = "text-center">Session</th>

              <th class = "text-center">Waiver</th>
              <th class = "text-center">Requirement</th>
            </tr>
            @foreach($offers as $offers)
              <tr class = "text-center">
                <td>{{ $offers->id }}</td>
                <td>{{ $offers->name }}</td>
                <td>{{ $offers->program }}</td>
                <td>{{ $offers->department }}</td>
                <td>{{ $offers->session }}</td>
                <td>{{ $offers->waiver }}</td>
                <td>{{ $offers->requirement }}</td>

                
                <td><a href="{{route('offers.edit',['id'=>$offers->id])}}" class = "btn btn-info">Edit</a></td>
                <td><a href="{{route('offers.destroy',['id'=>$offers->id])}}" class = "btn btn-danger">Delete</a></td>
                
                 <td><a href="{{route('download',['id'=>$offers->id])}}" class = "btn btn-info">Download</a></td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    @endsection