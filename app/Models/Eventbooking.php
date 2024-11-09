<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventbooking extends Model
{
    use HasFactory;

    protected $fillable = ["name","lastname","bookingdate","email","eventtype","numberofpeople","enquiry"];
    
}
