<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    use HasFactory;
     protected $table ="attendance";

    public function workschedule(){
    	return $this->belongsTo('App\Models\workschedule','id_workschedule','id_workschedule');
    }
    public function lecturers(){
    	return $this->belongsTo('App\Models\lecturers','id_lecturers','id_lecturers');
    }
}
