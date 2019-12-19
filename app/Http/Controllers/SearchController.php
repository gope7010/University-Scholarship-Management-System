<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    function index()
    {
     return view('search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('offers')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('program', 'like', '%'.$query.'%')
         ->orWhere('waiver', 'like', '%'.$query.'%')
         ->orWhere('postby', 'like', '%'.$query.'%')
         //->orWhere('Country', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('offers')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->program.'</td>
         <td>'.$row->waiver.'</td>
         <td>'.$row->postby.'</td>
        
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
