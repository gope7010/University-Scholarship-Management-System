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
        return view('university');
    }
    public function profile($name)
    {

        $university = University::where('name',$name)->get();
        // print_r($name);
        return view('university.profile', ['university'=> $university]);
    }
}
