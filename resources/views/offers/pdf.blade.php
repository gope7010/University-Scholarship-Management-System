<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Download</title>
  </head>
  <body>
      <h2 style="text-align: center;">Offer for {{ $offers->id}}</h2>
   <table border="1" class="table table-striped"> 
      <tr>
       <th class = "text-center">ID</th>
              <th class = "text-center">Offer Name</th>
              <th class = "text-center">Program </th>
              
              <th class = "text-center">Department </th>
              <th class = "text-center">Session</th>

              <th class = "text-center">Waiver</th>
              <th class = "text-center">Requirement</th>
      </tr>
      <tr>
         <td>{{ $offers->id }}</td>
          <td>{{ $offers->name }}</td>
          <td>{{ $offers->program }}</td>
          <td>{{ $offers->department }}</td>
          <td>{{ $offers->session }}</td>
          <td>{{ $offers->waiver }}</td>
          <td>{{ $offers->requirement }}</td>
      </tr>
    </table>
  </body>
</html>