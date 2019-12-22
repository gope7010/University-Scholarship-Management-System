<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Offer;
use App\University;
use App\Student;
use App\Approved;
use App\Rejected;
use PDF;
    class ApplicationController extends Controller
    {

      public function __construct()
    {
        $this->middleware('auth:university');
    }

        public function index($name)
        {
            $students = Student::where('university',$name)->get();
            return view('request.index',['students'=>$students]);
        }
        public function rejects($name)
        {
            $rejecteds = Rejected::where('university',$name)->get();
            return view('request.reject',['rejecteds'=>$rejecteds]);
        }

        public function approved($name)
        {
            $rejecteds = Approved::where('university',$name)->get();
            return view('request.approved',['rejecteds'=>$rejecteds]);
        }


        
        public function create($name)
        {
            //Return view to create employee
            $university = University::where('name',$name)->get();
            return view('offers.create', ['university'=> $university]);
        }
        
        public function approve($name,$id)
        {

           
            $info = Student::where('id',$id)->get();

            $approved = new Approved();
           
            $approved->name = $info[0]->name;
            $approved->nuniversity = $info[0]->nuniversity;
            $approved->email = $info[0]->email;
            $approved->mobile = $info[0]->mobile;
            $approved->result = $info[0]->result;
            $approved->offerid = $info[0]->offerid;
            $approved->university = $info[0]->university;

            $approved->save();



            $del = Student::find($id);
            
            $del->delete();
            return redirect()->route('applications',['name'=>$info[0]->university]);

            
        }
     
        
       
        public function reject($name,$id)
        {
            $info = Student::where('id',$id)->get();

            $reject = new Rejected();
           
            $reject->name = $info[0]->name;
            $reject->nuniversity = $info[0]->nuniversity;
            $reject->email = $info[0]->email;
            $reject->mobile = $info[0]->mobile;
            $reject->result = $info[0]->result;
            $reject->offerid = $info[0]->offerid;
            $reject->university = $info[0]->university;

            $reject->save();
            $req = Student::find($id);
            //$university = University::where('name',$offers->postby)->get();
            //delete
            $req->delete();
            return redirect()->route('applications',['name'=>$info[0]->university]);
        }

    function downloadPDF($id){
      $offers = Offer::find($id);
      $pdf = PDF::loadView('offers.pdf', compact('offers'));
      return $pdf->download('invoice.pdf');
    }

    }