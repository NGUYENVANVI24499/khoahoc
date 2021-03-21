<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workschedule extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ="workschedule";
    protected $primaryKey = 'id_workschedule';

    public function lecturers(){

    	return $this->belongsToMany('App\Models\lecturers','element','id_workschedule','id_lecturers');
    }
    public function week(){
    	return $this->belongsTo('App\Models\week','id_week');
    }
}
