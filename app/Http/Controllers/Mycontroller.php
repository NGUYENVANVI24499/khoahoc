<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function index(){

    	return "view('index')";
    }
}
