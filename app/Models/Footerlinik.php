<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Footerlinik extends Model
{
    use HasFactory;
    protected $fillable = ['footercolumns_id', 'linktextenglish', 'linktextarabic', 'linkengurl', 'linkaraburl', 'status'];


    public function page()
    {
        return $this->belongsTo(Footercolumn::class,'footercolumns_id','id');
            
        }

}