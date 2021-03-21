@extends('master')
@section('admin_content') 

<div class="form-w3layouts">
<div class="row">

            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm loại công tác
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
<form action="{{route('posteditcongtacmoi')}}" method="post">
  @csrf
  
	<div class="form-group">
        <input type="text" value="{{$loaicongtac->id_worktype}}" name="id" hidden="">
	    <label >tên loại công tác</label>
	    <input type="text" value="{{$loaicongtac->name_workschedule}}"  name="loaicongtac" class="form-control"   required>
	</div>
    
	<button type="submit"  class="btn btn-info">Sửa </button>
</form>
</div>
</div>
</section>
</div>
</div>
</div>

@endsection