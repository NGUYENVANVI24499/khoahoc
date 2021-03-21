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
        	@foreach($workschedule_type as $t)
          <tr data-expanded="true">
          	
            <td>{{$t->id_worktype}}</td>
            <td>{{$t->name_workschedule}}</td>
            <td><a href="{{URL::to('edit',$t->id_worktype)}}" > sửa</a></td>
            <td> <a href="{{URL::to('delete',$t->id_worktype)}}" >xóa</a></td>
            
          </tr>
         @endforeach
        </tbody>
      </table>
      <a href="{{URL::to('addloaicongtac')}}"  class="btn btn-info"> thêm loại công tác</a>
    </div>
  </div>
</div>

@endsection
