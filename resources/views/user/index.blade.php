<a href="{{url('admin/create')}}">Create Admin</a><br>

@foreach($user as $row)

-Nama : {{$row->name}}
-Email : {{$row->email}}
-Password {{$row->password}}

<a href=" {{url('admin/hapus/'.$row->id)}} ">Hapus</a>
<a href=" {{url('admin/edit/'.$row->id)}} ">Update</a>
<br>

@endforeach 
{{$user->links()}}