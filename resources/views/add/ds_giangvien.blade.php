@extends('master')
@section('admin_content') 
 
	<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     loai Công Tác
    </div>
    <div>
      <table class="table table-bordered" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Lịch công tác tuần</th>
          <th></th>
          <th></th>

            
           
            
          </tr>
        </thead>
        <tbody>
        	@foreach($lecturers as $t)
          <tr data-expanded="true">
          	
            <td>{{$t->id_lecturers}}</td>
            <td>{{$t->name_gv}}</td>
            <td><a href="{{URL::to('editgv',$t->id_lecturers)}}" > sửa</a></td>
            <td> <a href="{{URL::to('deletegv',$t->name_gv)}}" >xóa</a></td>
            
          </tr>
         @endforeach
        </tbody>
      </table>
      <a href="{{URL::to('add_gv')}}"  class="btn btn-info"> thêm giảng viên</a>
    </div>
  </div>
</div>

@endsection
