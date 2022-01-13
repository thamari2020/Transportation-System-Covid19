<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\Booking;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function create()
    {
        return view('vehicles.addVehicle');
    }

    public function store(Request $request) {

        $request->validate([    
            'name' => 'required',
            'route' => 'required',
            'passengers' => 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:10000'
        ]);
    
        $name = $request['name'];
        $route = $request['route'];
        $passengers = $request['passengers'];
        $image = $request->file('image')->store('uploads','public');
    
        $vehicle = new Vehicle();

        $vehicle->name = $name;
        $vehicle->route = $route;
        $vehicle->passengers = $passengers;
        $vehicle->image = $image;
      
        $vehicle->save(); 
      //  $data=Vehicle::all();
       // $vehicleData=Vehicle::all();
       // return view('vehicles.viewVehicle')->with('vehicles',$vehicleData)->with(['message' => 'Great! You have Successfully created a vehicle record', 'alert' => 'alert-success']);
        return redirect()->route('admin.viewVehicle')->with(['message' => 'Great! You have Successfully added a record', 'alert' => 'alert-success']);
    }

    public function view(){

        $vehicleData=Vehicle::all();
        return view('vehicles.viewVehicle')->with('vehicles',$vehicleData);
       
    }

    public function update($id){

        $updateVehicleData=Vehicle::find($id);
        return view('vehicles.updateVehicle')->with('updateVehicleData',$updateVehicleData);
    }


    public function updateVehicle(Request $request) {
       
        $request->validate([    
            'name' => 'required',
            'route' => 'required',
            'passengers' => 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:10000'
         ]);
         
        $id=$request['id'];
        $name = $request['name'];
        $route = $request['route'];
        $passengers = $request['passengers'];
        $image = $request->file('image')->store('uploads','public');
    
        $data=Vehicle::find($id);

        $data->name = $name;
        $data->route = $route;
        $data->passengers = $passengers;
        $data->image = $image;

        $data->save();
      //  $vehicleData=Vehicle::all();
      //  return view('vehicles.viewVehicle')->with('vehicles',$vehicleData)->with(['message' => 'Great! You have Successfully updated a record', 'alert' => 'alert-success']);
        return redirect()->route('admin.viewVehicle')->with(['message' => 'Great! You have Successfully updated a record', 'alert' => 'alert-success']);
    }


    public function viewBookingDetails(){

        $bookingData=Booking::all();
        return view('vehicles.bookingAccept')->with('bookings',$bookingData);
}


    public function approveBooking($id){

        $bookingData=Booking::find($id);
        $bookingData->status=1;
        $bookingData->save();

        return redirect()->route('admin.viewBooking')->with(['message' => 'Great! You have Successfully approved a request', 'alert' => 'alert-success']);
    }
}