@extends('master')
@section('admin_content') 

<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
 <div class="row">
   	<div class="col-lg-12">
    	<section class="panel">
            <header class="panel-heading">
            	Thêm giảng viên tham gia công tác vừa tạo
            </header>
            <table class="table table-bordered">
            	<tr>
            		<th>stt</th>
            		<th>Tên Giảng Viên</th>
            		<th></th>
            		
            	</tr>
            	@foreach($Gv as $gv)
            	<tr>
            		
            		<td>{{$stt++}}</td>
            		<td>{{$gv->name_gv}}</td>
            		<td>
            			<label class="i-checks m-b-none">
			            <input value="{{$gv->id_lecturers}}" type="checkbox" name="addgvien"><i></i>
			            </label>
            		</td>

            		
            	</tr>
            	@endforeach
                <input type="" name="" value="{{$id}}" hidden="">
            </table>
<button onclick="submitData()" class="button btn-warning">Lưu</button>
        </section>
    </div>
</div>



@endsection

<script type="text/javascript">
    
    function submitData(){
        statusList = jQuery('input[type=checkbox]:checked')
        data=[]
        for(i = 0 ; i<statusList.length;i++){
            std = {
                'id_lecturers':jQuery(statusList[i]).val()
               
            }
            data.push(std)
        }
        console.log(data)
        $.post('{{route('add_lecturers')}}',{
            '_token': $('#token').val(),
            'id_workschedule':{{$id}},
            'data':JSON.stringify(data)
        },function(dt){
            location.reload()
           alert("thêm giảng viên thành công")
        })
        
    }
</script>