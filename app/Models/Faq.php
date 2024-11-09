<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [

    'question_key','answer_key', "question_en","question_ar","answer_en","answer_ar","disp_order","status",];
}
