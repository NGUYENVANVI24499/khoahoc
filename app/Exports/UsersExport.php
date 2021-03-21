<?php

namespace App\Exports;

use App\Models\workschedule;
use App\Models\attendance;
use App\Models\lecturers;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;


class UsersExport implements FromView 
{
	public function __construct(int $id) {
    	$this->id = $id;
    }
	
   public function  view():View 
    {
       $kekhai = attendance::where('attendance.id_lecturers',$this->id)
                            ->join('lecturers','attendance.id_lecturers','lecturers.id_lecturers')
                            ->join('workschedule','attendance.id_workschedule','workschedule.id_workschedule')
                            ->join('week','workschedule.id_week','week.id_week')
                            ->where('attendance.status',1)
                            ->get();
        return view('export.export', [
            'kekhai' =>$kekhai,
            'id'=>$this->id

        ]);
    }
     
}

