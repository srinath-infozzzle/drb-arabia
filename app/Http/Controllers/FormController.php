<?php

namespace App\Http\Controllers;
use App;
use App\Models\Subpage;
use DB;
use App\Models\Jsonlink;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
class FormController extends Controller
{
    
    public function submitForm(Request $request){
        return redirect('/thankyou');
    }
}