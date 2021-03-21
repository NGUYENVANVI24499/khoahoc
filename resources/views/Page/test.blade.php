@extends('master')
@section('admin_content') 

<div class="row">
            <div class="col-lg-12">
            	
                    <section class="panel">
                        <header class="panel-heading">
                        	LỊCH LÀM VIỆC
					CỦA VIỆN KỸ THUẬT – CÔNG NGHỆ
			Tuần thứ 43 (Từ ngày 19/10/2020 đến ngày 25/10/2020)

                        </header>
                       
							<table class="table table-bordered">
								 <thead>	
							  <tr>
							  	<!-- <th> {{Carbon\Carbon::now()}}</th> -->
							  	
							    <th  scope="col">Thời gian</th>
							    <th  scope="col">Nội dung</th>
							    <th  scope="col">Thành phần</th>
							    <th  scope="col">Địa điểm</th>
							   

							  </tr>
							</thead>
						
							@foreach($gvien as $gv)
							<tr>
							
								@if(sw_get_current_weekday(Carbon\Carbon::parse($gv->ngay)->format('l')) =='Thứ 2' )
								<td colspan="4" ><p>  {{ sw_get_current_weekday(Carbon\Carbon::parse($gv->ngay)->format('l')) }}, ngày {{Carbon\Carbon::parse($gv->ngay)->format('d - m - Y')}}</p></td>
								@else
								
								@endif
							</tr>
							<tr>
								<td>{{$gv->thoigian}}</td>
								<td>{{$gv->noidung}}</td>
								<td>
									@foreach($gvien as $gv)
									<ul style="list-style-type:none;">
									  <li>{{$gv->name_gv}}</li>
									  
									</ul>
									@endforeach
								</td>
								<td>{{$gv->diadiem}}</td>
								
							</tr>
							
							

							@endforeach
							
							
						</table>
							</table>

						</section>
								
					</div>
					</div>

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
@endsection