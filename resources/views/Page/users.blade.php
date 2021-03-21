<table>
    <thead>
    <tr>
        
        <th>Tên tài khoản</th>
        <th>Email</th>
       
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            
            <td>{{ $user->id_gvien }}</td>
            <td>{{ $user->name_gv }}</td>
            
        </tr>
    @endforeach
    </tbody>
</table>