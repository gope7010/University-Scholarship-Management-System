@extends('university')
@section('offers')
    {{ csrf_field() }} {{ method_field('POST') }}
      <div class="row">
        <div class="col-sm-12">
          <table class="table" class = "text-center">
            <tr class = "text-center">
              <th class = "text-center">ID</th>
              <th class = "text-center">Student Name</th>
              <th class = "text-center">University</th>     
              <th class = "text-center">Email</th>
              <th class = "text-center">Mobile</th>
              <th class = "text-center">Result</th>
               <th class = "text-center">Offer Id</th>
              
            </tr>
            @foreach($rejecteds as $rejecteds)
              <tr class = "text-center">
                <td>{{ $rejecteds->id }}</td>
                <td>{{ $rejecteds->name }}</td>
                <td>{{ $rejecteds->nuniversity }}</td>
                <td>{{ $rejecteds->email }}</td>
                <td>{{ $rejecteds->mobile }}</td>
                <td>{{ $rejecteds->result }}</td>
                <td>{{ $rejecteds->offerid }}</td>

                
                
               
              </tr>
            @endforeach
          </table>
        </div>
      </div>

@endsection