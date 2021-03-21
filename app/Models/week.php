<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class week extends Model
{

	
    use HasFactory;
    public $timestamps = false;
     protected $table ="week";
       protected $primaryKey = 'id_week';
}
