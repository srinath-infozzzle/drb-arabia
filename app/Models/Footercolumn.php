<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footercolumn extends Model
{
    use HasFactory;
    protected $fillable = ["column_name_english","column_name_arabic","status","linkscount"];

    public function footerlinks()
    {  return $this->hasMany(Footerlinik::class,'footercolumns_id','id');    
    }
}
