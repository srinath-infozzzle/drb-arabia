<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;

class Frontmenu extends Model
{
    use HasFactory;
    protected $fillable = ['menu', 'menunameenglish', 'menunamearabic', 'menulevel', 'parentmenu'];
    public function parent()
    {
        return $this->belongsTo(Frontmenu::class, 'parentmenu', 'id');

    }
   

}