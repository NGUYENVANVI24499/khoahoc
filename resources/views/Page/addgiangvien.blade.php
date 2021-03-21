@extends('master')
@section('admin_content') 

 <div class="row">
   	<div class="col-lg-12">
    	<section class="panel">
            <header class="panel-heading">
            	Thêm giảng viên tham gia công tác vừa tạo
            </header>
            <table class="table table-bordered">
                <input type="text" name="id_workschedule" value="{{$congtac->id_workschedule}}" hidden="">
            	<tr>
            		<th>loại công tác</th>
            		<th>Ngày công tác</th>
            		<th>Thời gian</th>
            		<th>Nội dung công tác</th>
            		<th>địa điểm công tác</th>
            		<th>Thêm giảng viên</th>
            	</tr>
            	<tr>
            		<td>{{$congtac->name_workschedule}}</td>
            		<td>{{Carbon\Carbon::parse($congtac->date_begin)->format('d - m - Y')}}</td>
            		<td>{{$congtac->time}}</td>
            		<td>{{$congtac->content}}</td>
            		<td>{{$congtac->place}}</td>
            		<td><a href="{{URL::to('addgv',$congtac->id_workschedule )}}"> thêm giảng viên</a></td>
            	</tr>
            </table>
        </section>
    </div>
</div>



@endsection