<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name','last_name','address','contact_no',
		'nic','description','vacancy_id','user_id'];
}
