@extends('master')
@section('admin_content') 

 <div class="row">
            <div class="col-lg-12">
            	
                    <section class="panel">
                        <header class="panel-heading">
                        	danh sach giang vien 
                        </header>
                        <table class="table table-bordered">
								 <thead>	
							  <tr>
							  	<th scope="col">stt</th>
							    <th scope="col">tên Giảng Viên</th>
							    <th scope="col">diem danh</th>
							    

							  </tr>
							</thead>
							@foreach($thanhphan as $gv)
							<tr>
								
								<td>{{$gv->id_gvien}}</td>
								<td>{{$gv->name_gv}}</td>
								@if($gv->diemdanh==1)
								<td> <a href="{{URL::to('active',$gv->id_gvien)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a></td>
								@else
								<td><a href="{{URL::to('unactive',$gv->id_gvien)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a></td>
								@endif
								
							</tr>
							@endforeach
						</table>
                    </section>

            </div>

  </div>


@endsection