<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\University;
use App\User;

class UniversityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:university');
    }

    public function index()
    {
        return view('homeuni');
    }
    public function profile($name)
    {

        $university = University::where('name',$name)->get();
        // print_r($name);
        return view('university.profile', ['university'=> $university]);
    }

    public function edit($name)
    {

        $university = University::where('name',$name)->get();
        // print_r($name);
        return view('university.update', ['university'=> $university]);
    }

     public function update(Request $request)
        {
            //Retrieve the employee and update
            $university = University::find($request->input('id'));
            $university->name = $request->input('name');
            $university->email = $request->input('email');
            $university->address = $request->input('address');
            $university->mobile = $request->input('mobile');
            $university->save(); //persist the data
            return redirect()->route('university.profile', ['name'=>$request->input('name')])->with('info','Information Updated Successfully');
        }
}
