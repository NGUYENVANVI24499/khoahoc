@extends('master')
@section('admin_content') 


<form method="post" action="{{route('posttongket')}}">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <select class="form-control form-control-lg" name ="lecturer" >
    	@foreach($lecturers as $lecturer)
  	<option value="{{$lecturer->id_lecturers}}">{{$lecturer->name_gv}}</option>
@endforeach
	</select>
    <small id="emailHelp" class="form-text text-muted">BẢNG TỰ KHAI SỐ GIỜ CÔNG TÁC KHÁC.</small>
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection