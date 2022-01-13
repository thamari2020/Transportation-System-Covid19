<?php

namespace App\Http\Controllers;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        return view('vacancy.vacancy');
    }

    public function store(Request $request) {

        $request->validate([    
            'title' => 'required',
            'description' => 'required'
        ]);
    
        $title = $request['title'];
        $description = $request['description'];
    
        $vacancy = new Vacancy();

        $vacancy->title = $title;
        $vacancy->description = $description;
      
        $vacancy->save(); 
      //  $data=Vehicle::all();
       // $vehicleData=Vehicle::all();
       // return view('vehicles.viewVehicle')->with('vehicles',$vehicleData)->with(['message' => 'Great! You have Successfully created a vehicle record', 'alert' => 'alert-success']);
        return redirect()->route('admin.viewVacancy')->with(['message' => 'Great! You have Successfully added a record', 'alert' => 'alert-success']);
    }

    public function view()
    {
        $vacancyData=Vacancy::all();
        return view('vacancy.vacancyView')->with('vacancies',$vacancyData);
    }


}
