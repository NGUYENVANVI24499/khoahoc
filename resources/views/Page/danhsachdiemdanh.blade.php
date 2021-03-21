@extends('master')
@section('admin_content') 
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
  <div class="row">
    <div class="col-lg-12">
    	
        <section class="panel">
            <header class="panel-heading">
            	Danh sách giảng viên 

            </header>
           
				<table class="table table-bordered">
					 <thead>	
				  <tr>
				  	<!-- <th> {{Carbon\Carbon::now()}}</th> -->
				  	<th width="60" scope="col">STT</th>
				    <th width="133" scope="col">Tên giảng viên</th>
				    
				    <th width="90" scope="col">vắng mặt</th>
				    <th width="90" scope="col">có mặt</th>
				    <th width="120" scope="col">ghi chú</th>

				  </tr>
				  
				</thead>
				@if($giangvienList != null)
				@foreach( $giangvienList as $item)
				<tr>
					<td> {{$index++}}</td>
					<td>{{$item->name_gv}}</td>
					<td>
			            <input value="0" type="radio" name="{{$item->	id_lecturers}}">
			        </td>
					<td>
			            <input value="1" type="radio" name="{{$item->	id_lecturers}}" checked="">
			        </td>
					<td><input type="text" name="node_{{$item->	id_lecturers}}"></td>
				</tr>
				@endforeach
				@endif
				@if($edit !=null && count($edit)>0)
				@foreach( $edit  as $item)
				<tr>
					<td> {{$index++}}</td>
					<td>{{$item->name_gv}}</td>
					<td>
			            <input value="0" type="radio" name="{{$item->	id_lecturers}}"{{($item->status==0)?'checked':''}}>
			        </td>
					<td>
			            <input value="1" type="radio" name="{{$item->	id_lecturers}}" {{($item->status==1)?'checked':''}}>
			        </td>
					<td><input type="text" name="node_{{$item->	id_lecturers}}" value="{{$item->note}}"></td>
				</tr>
				@endforeach
				@endif

				</table>
				<input type="text" name="" value="{{$lichcongtac->id_workschedule}}" hidden="">
				<button class="btn btn-warning" onclick="submitData()">Save</button>
			</section>								
		</div>
		</div>
@endsection

<script type="text/javascript">
	
	function submitData(){
		statusList = jQuery('input[type=radio]:checked')
		data=[]
		for(i = 0 ; i<statusList.length;i++){
			std = {
				'id_gvien':jQuery(statusList[i]).attr('name'),
				'status':jQuery(statusList[i]).val(),
				'node':jQuery('[name=node_'+jQuery(statusList[i]).attr('name')+']').val()
			}
			data.push(std)
		}
		console.log(data)
		$.post('{{route('attendence_post')}}',{
			'_token': $('#token').val(),
			'id_congtac':{{$lichcongtac->id_workschedule}},
			'data':JSON.stringify(data)
		},function(dt){
			location.reload()
			alert("điểm danh thành công")
			
		})
	}
</script>