<form action=" {{url('admin/update')}}" method="post">
	<input type="hidden" name="id" value="{{$user->id}}">
	Nama : <input type="text" name="name" value=" {{$user->name}}">
	Email : <input type="email" name="email" value=" {{$user->email}}">
	Password : <input type="password" name="password" value=" {{$user->password}}">
	
	 {{csrf_field()}}
	 <button type="submit">Update</button>
</form>