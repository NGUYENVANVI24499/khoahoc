@extends('master')
@section('admin_content') 
 
  <div class="row">
    <div class="col-lg-12">
    	
        <section class="panel">
            <header class="panel-heading">
            	Điểm danh - today

            </header>
           
				<table class="table table-bordered">
					 <thead>	
				  <tr>
				  	<!-- <th> {{Carbon\Carbon::now()}}</th> -->
				  	<th width="60" scope="col">STT</th>
				    <th width="133" scope="col">Loại công tác</th>
				    <th width="120" scope="col">tên công tác</th>
				    <th width="90" scope="col">thời gian</th>
				    <th width="90" scope="col">Điểm danh</th>
				    <th width="120" scope="col">Thống kê</th>

				  </tr>
				  
				</thead>
				@foreach($congtactoday as $ct)
					<tr>
						<td>{{$stt++}}</td>
						<td>{{$ct->name_workschedule}}</td>
						<td>{{$ct->content}}</td>
						<td>{{Carbon\Carbon::parse($ct->date_begin)->format('d - m - Y')}}</td>
						<td><button class="button btn-success" onclick="window.open('{{URL::to('danhsachdiemdanh',$ct->id_workschedule)}}','_self')">Điểm danh</button></td>
						<td><button class="button btn-warning">thống kê</button></td>
					</tr>
				@endforeach
				</table>

			</section>
					
		</div>
		</div>


@endsection
