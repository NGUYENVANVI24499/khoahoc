@extends('master')
@section('admin_content') 
 
	<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Tuần Công Tác
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
        	@foreach($tuan as $t)
          <tr data-expanded="true">
          	
            <td>{{$t->id_week}}</td>
            <td>{{$t->name_week}}</td>
            <td><a href="{{URL::to('themcongtactuan',$t->id_week)}}"> thêm công tác trong tuần</td>
              <td ><a href="{{URL::to('lichcongtac',$t->id_week)}}"> xem</td>
            
          </tr>
         @endforeach
        </tbody>
      </table>
      <a href="{{URL::to('themtuan',$end->id_week)}}"  class="btn btn-info"> thêm tuần công tác</a>
    </div>
  </div>
</div>

@endsection
