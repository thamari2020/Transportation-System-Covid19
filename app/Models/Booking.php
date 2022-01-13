<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name','last_name','address','contact_no','booking_date',
		'nic','image','status','vehicle_id','user_id'];
  
}
