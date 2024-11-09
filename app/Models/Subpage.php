<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subpage extends Model
{
    use HasFactory;

    protected $fillable = ["page_id","templet_id","name","status"];
    public function page()
    {
    return $this->belongsTo(Page::class,'page_id','id');
            
        }
        public function template()
        {
            return $this->belongsTo( Template::class,'templet_id','id');
                
            }  
   
}
