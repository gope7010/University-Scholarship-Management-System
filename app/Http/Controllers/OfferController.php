<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Offer;
use App\University;
    class OfferController extends UniversityController
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
        public function index()
        {
            //Show all employees from the database and return to view
            $offers = Offer::all();
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
            $offers->waiver = $request->input('waiver');
            $offers->postby = $request->input('postby');
            $offers->save(); //persist the data
            return redirect()->route('offers.index')->with('info','Offer Added Successfully');
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
            $offers->waiver = $request->input('waiver');
            
            $offers->save(); //persist the data
            return redirect()->route('offers.index')->with('info','Offer Updated Successfully');
        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //Retrieve the employee
            $offers = Offer::find($id);
            //delete
            $offers->delete();
            return redirect()->route('offers.index');
        }
    }