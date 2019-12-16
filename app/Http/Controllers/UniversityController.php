<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function profile($id)
    {
        $university = universities::find($id);
        return view('university.profile', ['university'=> $university]);
    }
}
