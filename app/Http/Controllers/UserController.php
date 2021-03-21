<?php

namespace App\Http\Controllers;

use App\Models\lecturers;
use App\Models\week;
use App\Models\workschedule;
use App\Models\workschedule_type;
use App\Models\attendance;
use App\Models\element;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function trangchu1(){
    	$week = week::orderBy('id_week','DESC')->select('id_week')->first();
    	$workschedules = workschedule::where('id_week',8)->orderBy('date_begin', 'asc')->orderBy('time','asc')->get();
       
    	return view('userdah',compact('workschedules','week'));
    }
}
