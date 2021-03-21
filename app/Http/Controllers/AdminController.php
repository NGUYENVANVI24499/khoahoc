<?php


namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\redirect;

use App\Models\lecturers;
use App\Models\week;
use App\Models\workschedule;
use App\Models\workschedule_type;
use App\Models\attendance;
use App\Models\element;


use Auth;
session_start();



class AdminController extends Controller
{
    public function getindex(){
        if(Auth::user()->hasRole('user')){
            return view('userdah');
        }elseif (Auth::user()->hasRole('secretary')) {
            return view('Page.index');
        }elseif (Auth::user()->hasRole('admin')) {
            return view('Page.index');
        }
    	
    }
    public function getlichcongtac($id){
    	 
        
        
        $workschedules = workschedule::where('id_week',$id)->orderBy('date_begin', 'asc')->get();
       $week = week::find($id);
           
        return view('Page.lichcongtac',compact('workschedules','week'));
        
        }
        
         
        // $b=DB::table()
    	
    
    public function gettuancongtac(){

        $tuan = week::all();
        $end = week::orderBy('id_week','desc')->first();
    	return view('Page.tuancongtac',compact('tuan','end'));
    }
    public function getthanhphan($id ){
            $thanhphan=DB::table('element')->where('id_element',$id)->join('lecturers','element.id_lecturers','=','lecturers.id_lecturers')->get();

        return view('Page.danhsachGV',compact('thanhphan'));
    }
    public function themcongtactuan($id){
        $idd = $id;
        $loaicongtac = workschedule_type::all();
        return view('Page.themcongtactuan',compact('idd','loaicongtac'));
    }
 


//thêm loại công tác

public function tl_loaicongtac(){
    $workschedule_type =workschedule_type::all();
    return view('add.loaicongtac',compact('workschedule_type'));
}    
public function addloaicongtac(){

    return view('add.addloaicongtac');
}
public function postloaicongtac(Request $request){
    $data = new workschedule_type();
    $data->name_workschedule = $request->loaicongtac;
    $data->save();
    return Redirect::to('loaicongtac');
}
public function editloaicongtac($id){

    $loaicongtac = workschedule_type::find($id);
   
    return view('add.editloaicongtac',compact('loaicongtac'));
}
public function posteditcongtacmoi(Request $req){
    $id = $req->id;
    $data = workschedule_type::find($id);
    
    $data->name_workschedule = $req->loaicongtac;
    $data->save();
    return Redirect::to('loaicongtac');
}

//danh sách giảng viên
public function getdsgv(){
    $lecturers =lecturers::all();
    return view('add.ds_giangvien',compact('lecturers'));
}
public function add_gv(){
    return view('add.add_gv');
}
public function postadd_gv(Request $req){

    $data = new lecturers();
    $data->name_gv = $req->name_gv;
    $data->save();
    return Redirect::to('danhsachgv');
}

//thêm lịch công tác.
    public function addlichcongtac( Request $req){
        
        $datalich = new workschedule();

        $datalich->id_week = $req->idtuan;
        $datalich->id_worktype = $req->loaicongtac;
        $datalich->date_begin = $req->date;
        $datalich->time = $req->thoigian;
        $datalich->date_finish = $req->date_end;
        $datalich->content = $req->noidung;
        $datalich->place = $req->diadiem;
        $datalich->note=$req->ghichu;
        $datalich->save();
        //Session::put('message',' thêm lịch công tác thành công');
        return Redirect::to('themgiangvien');      
    }

//thêm giảng viên
public function addgiangvien(){
    $congtac = workschedule::orderBy('id_workschedule','DESC')->join('workschedule_type','workschedule.id_worktype','workschedule_type.id_worktype')->first();
    return view('Page.addgiangvien' , compact('congtac'));
}
public function addgv($id){   
    $Gv = lecturers::all();
    $stt = 1;
    return view('Page.adddanhsachgv',compact('Gv','stt','id'));
}
//thêm tuần công tác
public function themtuan($id){
    
    $a  =(int)$id;
    $a = $a +1;
    $add='LỊCH CÔNG TÁC TUẦN '.$a;
    $tuan = new week;
    $tuan->name_week=$add;
    $tuan->save();
    return redirect()->back()->with('thongbao','thêm tuần thành công');

}

//điểm danh

    public function viewdiemdanh(){
        $currentDate = date('Y-m-d');
        $congtactoday= workschedule::where('date_begin','<=',$currentDate)
                                    ->where('date_finish','>=',$currentDate)
                                    ->join('workschedule_type','workschedule.id_worktype','workschedule_type.id_worktype')
                                    ->get();
        $stt=1;

        return view('Page.diemdanh',compact('congtactoday','stt'));
    }
    public function getdanhsachdiemdanh($id){
        $index = 1;
        //check dữ lieu
        $lichcongtac= workschedule::where('id_workschedule',$id)->get();
        if($lichcongtac != null && count($lichcongtac)>0){
            $lichcongtac = $lichcongtac[0];
        }else{
            return redirect()->route('diemdanh');
        }

        //danh sách giảng viên
        $mydate =new \DateTime();
        $currentDate = $mydate->format('Y-m-d');

        $edit = attendance::where('id_workschedule',$id)
                        ->leftJoin('lecturers','attendance.id_lecturers','lecturers.id_lecturers')
                        ->where('created_at','>=',$currentDate)->get();
        $giangvienList = null;
        if($edit == null || count($edit)==0){
            $giangvienList = element::where('id_workschedule',$id)
                            ->Join('lecturers','element.id_lecturers','lecturers.id_lecturers')
                            ->SELECT ('lecturers.name_gv' ,'lecturers.id_lecturers')
                            ->get();
        }

        return view('Page.danhsachdiemdanh',
            compact('giangvienList','index','edit','lichcongtac'));
    }
    
    public function postdiemdanh(Request $request){
        $mydate =new \DateTime();
        $currentTime = $mydate->format('Y-m-d H:i:s');
        $currentDate = $mydate->format('Y-m-d H:i:s');

        $id_workschedule = $request->id_congtac;
        $data = json_decode($request->data, true);

        //check du lieu da ton tai hay chua
        $edit = attendance::where('id_workschedule',$id_workschedule)
                        ->Join('lecturers','attendance.id_lecturers','lecturers.id_lecturers')
                        ->get();
        if($edit!=null && count($edit)>0){
            //update
            foreach ($data as $item) {
            DB::table('attendance')
                ->where('id_workschedule',$id_workschedule)
                ->where('id_lecturers',$item['id_gvien'])
                ->update([
                'status'=>$item['status'],
                'note'=>$item['node'],
                'update_at'=>$currentTime
                ]);
                }
                   return redirect()->route('diemdanh');  
            }
        
             //them moi
        foreach ($data as $item) {
            DB::table('attendance')->insert([
                'id_workschedule'=>$id_workschedule,
                'id_lecturers'=>$item['id_gvien'],
                'status'=>$item['status'],
                'note'=>$item['node'],
                'created_at'=>$currentTime,
                'update_at'=>$currentTime
            ]);
        }
        return redirect()->route('diemdanh'); 
    }

    //add thành phần lịch công tác
    public function addthanhphan(Request $request){
        $mydate =new \DateTime();
        $currentTime = $mydate->format('Y-m-d H:i:s');
         $id_work = $request->id_workschedule;
         $data = json_decode($request->data, true);
         foreach ($data as $value) {
            DB::table('element')->insert([
                'id_workschedule'=>$id_work,
                'id_lecturers'=>$value['id_lecturers'],
                'created_at'=>$currentTime,
                'update_at'=>$currentTime

            ]);
           
         }
        
        
    }



    public function gettongket(){
        $lecturers = lecturers::all();
        return view('Page.tongket',compact('lecturers'));
    }
//
//     SELECT *
// FROM attendance

// JOIN workschedule on attendance.id_workschedule = workschedule.id_workschedule
// JOIN week on workschedule.id_week=week.id_week
// WHERE attendance.id_lecturers = 9 and attendance.status = 1
    public function posttongket(Request $request){
        $id= $request->lecturer;
        $tt = 1;
        $name_gv = attendance::where('attendance.id_lecturers',$id)
                            ->join('lecturers','attendance.id_lecturers','lecturers.id_lecturers')
                            ->select('name_gv')
                            ->first();
        $kekhai = attendance::where('attendance.id_lecturers',$id)
                            ->join('lecturers','attendance.id_lecturers','lecturers.id_lecturers')
                            ->join('workschedule','attendance.id_workschedule','workschedule.id_workschedule')
                            ->join('week','workschedule.id_week','week.id_week')
                            ->where('attendance.status',1)
                            ->get();
        return view('Page.chitietkekhai',compact('kekhai','tt','name_gv','id'));
             
    }

    public function testa(){
        return view('Page.abc');
    }
    public function testgo(){


        return redirect()->route('index');
    }
        
}
