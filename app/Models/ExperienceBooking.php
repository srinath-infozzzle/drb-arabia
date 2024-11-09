<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceBooking extends Model
{
    use HasFactory;

    protected $table = 'experiencebooking';

    protected $fillable = ["name","experience","phone","email","enquiry"];
    
}
