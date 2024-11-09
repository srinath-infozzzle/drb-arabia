<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testmonial extends Model
{
    use HasFactory;

protected $fillable = ["name_key","testmonial_key","name_en","name_ar","testmonial_text_en","testmonial_text_ar",'status'];
}
