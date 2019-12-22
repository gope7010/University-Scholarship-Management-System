  
    @extends('university')
    @section('title','Offers Lists')
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
            @foreach($students as $students)
              <tr class = "text-center">
                <td>{{ $students->id }}</td>
                <td>{{ $students->name }}</td>
                <td>{{ $students->nuniversity }}</td>
                <td>{{ $students->email }}</td>
                <td>{{ $students->mobile }}</td>
                <td>{{ $students->result }}</td>
                <td>{{ $students->offerid }}</td>

                
                <td><a href="{{route('application.approve',['name'=>$students->university,'id'=>$students->id])}}" class = "btn btn-info">Approve</a></td>
                <td><a href="{{route('app.reject',['name'=>$students->university,'id'=>$students->id])}}" class = "btn btn-danger">Reject </a></td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    @endsection