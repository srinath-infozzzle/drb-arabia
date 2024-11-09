<?php namespace App\Models; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model; 
class Pagecontent extends Model { 
    use HasFactory;
    protected $fillable = ['page_id','section_id','contenname','contenttextenglish','contenttextarabic'];
    public function page()
    {
        return $this->belongsTo(Page::class,'page_id','id');
            
        }
        public function section()
        {
            return $this->belongsTo( Section::class,'section_id','id');
                
            }    

} 