<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//user home & other
Route::get('/','App\Http\Controllers\HomeController@home')->name('/');

Route::get('/selectedVehicle/{id}','App\Http\Controllers\BookingController@selectedVehicle');  
Route::post('/checkVehicle/{id}','App\Http\Controllers\BookingController@checkVehicle')->name('checkVehicle'); 
Route::get('/bookVehicle/{date}/{id}','App\Http\Controllers\BookingController@bookVehicle')->name('bookVehicle');
Route::post('/bookVehicle/{date}/{id}','App\Http\Controllers\BookingController@bookVehicle')->name('bookVehicle');

//Vacancy Applicant
Route::get('/viewVacancy', 'App\Http\Controllers\ApplicantController@view')->name('viewVacancy');
Route::get('/applyVacancy/{id}','App\Http\Controllers\ApplicantController@applyVacancy');
Route::get('/storeApplicantDetails/{vacancyId}','App\Http\Controllers\ApplicantController@storeApplicantDetails')->name('storeApplicantDetails'); 
Route::post('/storeApplicantDetails/{vacancyId}','App\Http\Controllers\ApplicantController@storeApplicantDetails')->name('storeApplicantDetails');  

//admin,user login & registration
Route::get('login', 'App\Http\Controllers\Auth\AuthController@index')->name('login');
Route::post('post-login', 'App\Http\Controllers\Auth\AuthController@postLogin')->name('login.post'); 
Route::get('registration', 'App\Http\Controllers\Auth\AuthController@registration')->name('register');
Route::post('post-registration', 'App\Http\Controllers\Auth\AuthController@postRegistration')->name('register.post'); 
Route::get('logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');
//Route::get('viewVacancy', 'App\Http\Controllers\Auth\AuthController@viewVacancy')->name('viewVacancy');

//admin home & other
Route::get('admin/home', 'App\Http\Controllers\HomeController@dashboard')->name('admin.route')->middleware('admin');
Route::get('admin/addVehicle','App\Http\Controllers\VehicleController@create')->name('admin.addVehicleCreate')->middleware('admin');               //get-add vehicle from
Route::post('admin/addVehicle','App\Http\Controllers\VehicleController@store')->name('admin.addVehicleStore')->middleware('admin');   //add vehicles 
Route::get('admin/viewVehicle', 'App\Http\Controllers\VehicleController@view')->name('admin.viewVehicle')->middleware('admin'); //view vehicles 
Route::get('admin/update/{id}','App\Http\Controllers\VehicleController@update')->name('admin.updateVehicleGet')->middleware('admin');                   //get-update vehicle from
Route::post('admin/updateVehicle','App\Http\Controllers\VehicleController@updateVehicle')->name('admin.updateVehiclePost')->middleware('admin');            //update vehicles 
Route::get('admin/viewBooking','App\Http\Controllers\VehicleController@viewBookingDetails')->name('admin.viewBooking')->middleware('admin'); 
Route::get('admin/approveBooking/{id}','App\Http\Controllers\VehicleController@approveBooking')->name('admin.approveBookingPost')->middleware('admin');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('admin/addVacancy', 'App\Http\Controllers\VacancyController@index')->name('admin.addVacancy')->middleware('admin');    
Route::post('admin/storeVacancy', 'App\Http\Controllers\VacancyController@store')->name('admin.storeVacancy')->middleware('admin');
Route::get('admin/viewVacancy', 'App\Http\Controllers\VacancyController@view')->name('admin.viewVacancy')->middleware('admin');      