<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use DB;

use Session;
use Illuminate\Support\Facades\redirect;

use App\Models\lecturers;
use App\Models\week;
use App\Models\workschedule;
use App\Models\workschedule_type;
use App\Models\attendance;
use App\Models\element;



session_start();

class Dashboarcontroller extends Controller
{
    public function index(){
    	if(Auth::user()->hasRole('user')){            
    		return view('userdah');
    	}elseif (Auth::user()->hasRole('secretary')) {
    		return view('Page.index');
    	}elseif (Auth::user()->hasRole('admin')) {
    		return view('Page.index');
    	}
    	
    }
    public function myprofile(){
        return view('myprofile');
    }

}
