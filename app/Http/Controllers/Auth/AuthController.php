<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Vacancy;
use Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }  

    public function postLogin(Request $request)
    {  
        $inputVal = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))){
            if (auth()->user()->is_admin == 1) {
              //  return "i ama admin";
                return redirect()->route('admin.route')->with(['message' => 'Great! You have Successfully Logged In', 'alert' => 'alert-success']);
            }else{
                return redirect()->route('/')->with(['message' => 'Great! You have Successfully Logged In', 'alert' => 'alert-success']);
            }
        }else{
            return redirect()->route('login')
                ->with(['message' => 'Email & Password are incorrect.', 'alert' => 'alert-danger']);
        }     
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('login')->with(['message' => 'Great! You have Successfully Registered', 'alert' => 'alert-success']);
    }

   
    public function create(array $data) {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);

    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    
    public function viewVacancy()
    {
        $vacancyData=Vacancy::all();
        return view('home.vacancyViewDashboard')->with('vacancies',$vacancyData);
    }

}
