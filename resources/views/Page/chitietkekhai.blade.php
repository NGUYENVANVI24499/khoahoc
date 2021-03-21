@extends('master')
@section('admin_content') 

<div class="row">
    <div class="col-lg-12">
    	
    <section class="panel">
                <header class="panel-heading">
                	BẢNG TỰ KHAI SỐ GIỜ CÔNG TÁC KHÁC NĂM HỌC 2019-2020
                	{{$name_gv->name_gv}}

</header>

	<table class="table table-bordered">
		 <thead>	
	  <tr>
	  	<!-- <th> {{Carbon\Carbon::now()}}</th> -->
	  	<th width="10">TT</th>
	    <th width="250" scope="col">Nội dung</th>
	    <th width="50" scope="col">Định mức theo quy định (Giờ thực tế)</th>
	    <th width="10" scope="col">Số lượng</th>
	    <th width="10" scope="col">Tổng</th>
	     <th width="30" scope="col">Ngày thực hiện</th>
	     <th width="150" scope="col">Minh chứng</th>
	     <th width="10" scope="col">Ghi chú</th>

	  </tr>
	</thead>
	@foreach($kekhai as $value)
	<tr>

		<td>{{$tt++}}</td>
		<td>{{$value->content}}</td>
		<td>8</td>
		<td>2</td>
		<td></td>
		<td>{{Carbon\Carbon::parse($value->date_begin)->format('d - m - Y') }}</td>
		<td>{{$value->name_week}}</td>
		<td>{{$value->node}}</td>
	</tr>
	
	@endforeach
	<tr>
		<td></td>
		<td>tổng công</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	</table>
<a href="{{URL::to('export',$id)}}" class="btn btn-info"> xuất excel</a>
	</section>
						
	</div>
	</div>

@endsection