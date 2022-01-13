<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $vehicleData=Vehicle::all();
        return view('home.welcome')->with('vehicles',$vehicleData);
    }

    public function dashboard()
    {
        return view('dashboard');
    }


    
    
}