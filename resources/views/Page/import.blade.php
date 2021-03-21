@extends('master')
@section('admin_content')



<table>
   <tr> <td>asdjksadj</td></tr>
    <thead>
    <tr>
      
        <th>Tên tài khoản</th>
        <th>Email</th>
       
    </tr>
    </thead>
    <tbody>
    @foreach($giangvien as $user)
        <tr>
            
            <td>{{ $user->noidung }}</td>
            <td>{{$user->ngay}}
            
        </tr>
    @endforeach
    </tbody>
</table>
@endsection