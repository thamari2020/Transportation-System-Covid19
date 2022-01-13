<?php

namespace App\Http\Controllers;
use App\Models\Vacancy;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function view()
    {
        $vacancyData=Vacancy::all();
        return view('applicant.vacancyViewHome')->with('vacancies',$vacancyData);
    }

    public function applyVacancy($id){

        return view('applicant.applicantDetails')->with('vacancyId',$id);
    }

    public function storeApplicantDetails(Request $request,$vacancyId) {

        $user = auth()->user();
 
       // dd($user->id);

         $request->validate([    
             'first_name' => 'required',
             'last_name' => 'required',
             'address' => 'required',
             'contact_no' => 'required',
             'nic' => 'required',
             'description'=>'required'     
          ]);
     
         $first_name = $request['first_name'];
         $last_name = $request['last_name'];
         $address = $request['address'];
         $contact_no = $request['contact_no'];
         $nic = $request['nic'];
         $description = $request['description'];
     
         $applicant = new Applicant();
 
         $applicant->first_name = $first_name;
         $applicant->last_name = $last_name;
         $applicant->address = $address;
         $applicant->contact_no = $contact_no;
         $applicant->nic = $nic;
         $applicant->description = $description;
         $applicant->vacancy_id = $vacancyId;
         $applicant->user_id = $user->id;
       
         $applicant->save(); 

        return redirect()->route('/')->with(['message' => 'Great! You have Successfully added a record', 'alert' => 'alert-success']);
        
     }
     
}
