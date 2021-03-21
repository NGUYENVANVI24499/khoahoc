@extends('master')
@section('admin_content') 
 
  <div class="row">
    <div class="col-lg-12">
    	
    <section class="panel">
                <header class="panel-heading">
               <span style="color: #800000;">LỊCH LÀM VIỆC
			CỦA VIỆN KỸ THUẬT – CÔNG NGHỆ
	Tuần thứ {{$week->id_week}} (Từ ngày  đến ngày )
 </span>	

</header>

	<table class="table table-bordered">
		 <thead>	
	  <tr >
	  	<!-- <th> {{Carbon\Carbon::now()}}</th> -->
	  	
	    <th width="113" scope="col" >Thời gian</th>
	    <th  width="113" scope="col" >Nội dung</th>
	    <th width="250" scope="col" >Thành phần</th>
	    <th width="200" scope="col" >Địa điểm</th>

	  </tr>
	</thead>
	<?php $is = 'Thứ 1'?>
	@foreach($workschedules as $workschedule)

	<?php $ab =sw_get_current_weekday(Carbon\Carbon::parse($workschedule->date_begin)->format('l'));?>
	
	<td  colspan="4" style="color: #000000"
		<?php 
			if($is != $ab)
			  $is = $ab;
			 else echo "hidden=" ;
		?>
	>

{{sw_get_current_weekday(Carbon\Carbon::parse($workschedule->date_begin)->format('l')) }}, ngày {{Carbon\Carbon::parse($workschedule->date_begin)->format('d - m - Y') }}
		</td>
	<tr>
		
		<td  style="color: #000080;">{{$workschedule->time}} {{$workschedule->note}}</td>
		<td style="color: #000080;">{{$workschedule->content}}</td>
		<td style="color: #000080;">
		@foreach( $workschedule->lecturers as $lecturers)
		
			<ul style="list-style-type:none;">
			  <li>{{$lecturers->name_gv}}</li>
			  
			</ul>

		
		@endforeach
		</td>
		<td style="color: #000080;">{{$workschedule->place}}</td>
	</tr>
	@endforeach
	
	
	</table>

	</section>
						
	</div>
	</div>


 <style type="text/css">
 		table, th{
 			
 		}
        table, td{
        	color: #000080;
        }
       
    </style>
@endsection
<?php

function Yesterday($weekday){
	return 0;
}

function sw_get_current_weekday($weekday) {

    $weekday = strtolower($weekday);
    switch($weekday) {
        case 'monday':
            $weekday = 'Thứ 2';
            break;
        case 'tuesday':
            $weekday = 'Thứ 3';
            break;
        case 'wednesday':
            $weekday = 'Thứ 4';
            break;
        case 'thursday':
            $weekday = 'Thứ 5';
            break;
        case 'friday':
            $weekday = 'Thứ 6';
            break;
        case 'saturday':
            $weekday = 'Thứ 7';
            break;
        default:
            $weekday = 'Chủ nhật';
            break;
    }
    return $weekday;
}
?>