				

<table class="table table-bordered">
    <thead>
    	
    <tr>
        <th width="10">TT</th>
	    <th width="50" scope="col">Nội dung</th>
	    <th width="30" scope="col">Định mức theo quy định (Giờ thực tế)</th>
	    <th width="10" scope="col">Số lượng</th>
	    <th width="10" scope="col">Tổng</th>
	     <th width="30" scope="col">Ngày thực hiện</th>
	     <th width="150" scope="col">Minh chứng</th>
	     <th width="10" scope="col">Ghi chú</th>
    </tr>
    </thead>
    <tbody>
    @foreach($kekhai as $value)
	<tr>

		<td>{{$loop->index+1}}</td>
		<td>{{$value->content}}</td>
		<td>8</td>
		<td>2</td>
		<td></td>
		<td>{{$value->date_begin}}</td>
		<td>{{$value->name_week}}</td>
		<td>{{$value->node}}</td>

	</tr>
	
	@endforeach

    </tbody>
</table>
<a href="{{URL::to('export',$id)}}"> ddd</a>

