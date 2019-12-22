<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Offer;
use App\University;
    class OfferController extends Controller
    {

      public function __construct()
    {
        $this->middleware('auth:university');
    }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index($name)
        {
            //Show all employees from the database and return to view
            $offers = Offer::where('postby',$name)->get();
            return view('offers.index',['offers'=>$offers]);
        }
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create($name)
        {
            //Return view to create employee
            $university = University::where('name',$name)->get();
            return view('offers.create', ['university'=> $university]);
        }
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //Persist the employee in the database
            //form data is available in the request object
            $offers = new Offer();
            //input method is used to get the value of input with its
            //name specified
            $offers->name = $request->input('name');
            $offers->program = $request->input('program');
            $offers->department = $request->input('department');
            $offers->session = $request->input('session');
            $offers->waiver = $request->input('waiver');
            $offers->requirement = $request->input('requirement');
            $offers->postby = $request->input('postby');
            $offers->save(); //persist the data
            return redirect()->route('offers.index', ['name'=>$request->input('postby')])->with('info','Offer Added Successfully');
        }
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //Find the employee
            $offers = Offer::find($id);
            return view('offers.edit',['offers'=> $offers]);
        }
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request)
        {
            //Retrieve the employee and update
            $offers = Offer::find($request->input('id'));
            $offers->name = $request->input('name');
            $offers->program = $request->input('program');
            $offers->department = $request->input('department');
            $offers->session = $request->input('session');
            $offers->waiver = $request->input('waiver');
            $offers->requirement = $request->input('requirement');
           
            
            $offers->save(); //persist the data
            return redirect()->route('offers.index',['name'=>$request->input('postby')])->with('info','Offer Updated Successfully');
        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $name = Offer::where('id',$id)->get();
            $offers = Offer::find($id);
            //$university = University::where('name',$offers->postby)->get();
            //delete
            $offers->delete();
            return redirect()->route('offers.index',['name'=>$name[0]->postby]);
        }


 function search()
    {
     return view('search');
    }  



 function action(Request $request, $postby)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('offers')
         ->Where('postby',$postby)
         ->Where('name', 'like', '%'.$query.'%')
         ->orWhere('program', 'like', '%'.$query.'%')
         ->orWhere('waiver', 'like', '%'.$query.'%')
         ->orWhere('postby', 'like', '%'.$query.'%')
         //->orWhere('Country', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('offers')->where('postby',$postby)
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