@extends('master')
@section('admin_content')

<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<button class="btn btn-warning" onclick="submitData()">Save</button>



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
		$.post('{{route('testgo')}}',{
			'_token': $('#token').val(),
		
			'data':JSON.stringify(data)
		},function(dt){
			location.reload()
			
			
		})
	}
</script>