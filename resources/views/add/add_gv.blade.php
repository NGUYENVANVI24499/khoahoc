@extends('master')
@section('admin_content') 

<div class="form-w3layouts">
<div class="row">

            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm giảng viên
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
<form action="{{route('postadd_gv')}}" method="post">
  @csrf
	<div class="form-group">
	    <label >tên giảng viên</label>
	    <input type="text"  name="name_gv" class="form-control"   required>
	</div>
	<button type="submit"  class="btn btn-info">Thêm </button>
</form>
</div>
</div>
</section>
</div>
</div>
</div>

@endsection