<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workschedule_type extends Model
{
    use HasFactory;
     protected $primaryKey = 'id_worktype';
    public $timestamps = false;
     protected $table ="workschedule_type";
}
