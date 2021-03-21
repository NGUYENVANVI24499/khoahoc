<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturers extends Model
{
    use HasFactory;
    public $timestamps = false;
     protected $table ="lecturers";
    protected $primaryKey ="id_lecturers";
}
