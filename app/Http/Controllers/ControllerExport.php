<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;

use Maatwebsite\Excel\Facades\Excel;
class ControllerExport extends Controller
{
    //
    public function export($id) 
    {
    	
        return Excel::download(new UsersExport($id), 'users.xlsx');
    }
}
?>
