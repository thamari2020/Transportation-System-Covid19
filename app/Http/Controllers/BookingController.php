<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function selectedVehicle($id){

        $selectedVehicleData=Vehicle::find($id);
        //dd($checkVehicleData);
        return view('booking.selectedVehicle')->with('selectedVehicleData',$selectedVehicleData);
    }

    public function checkVehicle(Request $request, $id) {

        $request->validate([    
            'date' => 'required'
        ]);
    
        $date = $request['date'];

      $data=Booking::all();
       
    //check vehicle id & date
    $bookingIds = DB::select( DB::raw ("SELECT id FROM bookings WHERE (( vehicle_id = '{$id}') AND (booking_date = '{$date}'))"));
    
    $bookingIdsCount = count($bookingIds);
    $passengers = DB::table('vehicles')->where('id', $id)->value('passengers');

  //  dd($bookingIds,$bookingIdsCount,$passengers);

    $config = "Seats are available. You can make Booking";
    if($bookingIdsCount < $passengers){
        return view('booking.booking',compact('date','id','config'));
    }
    else{
        return redirect()->route('/')->with(['message' => 'All seats are booked. Try another', 'alert' => 'alert-danger']);
    }
    }

    public function bookVehicle(Request $request,$date,$id) {

       $user = auth()->user();

        $request->validate([    
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'nic' => 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:10000'     
         ]);
    
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $address = $request['address'];
        $contact_no = $request['contact_no'];
        $nic = $request['nic'];
        $image = $request->file('image')->store('uploads','public');
    
        $booking = new Booking();

        $booking->first_name = $first_name;
        $booking->last_name = $last_name;
        $booking->address = $address;
        $booking->contact_no = $contact_no;
        $booking->booking_date = $date;
        $booking->nic = $nic;
        $booking->image = $image;
        $booking->vehicle_id = $id;
        $booking->user_id = $user->id;
      
        $booking->save(); 
        $bookingDetails=Booking::all()->where('user_id', $user->id);
        return view('booking.bookingDetails')->with('bookingDetails',$bookingDetails);
    }
    
    }


