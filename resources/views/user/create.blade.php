<ul>
	@foreach($errors->all() as $row)
	<li>{{$row}}</li>
	@endforeach
</ul>

<form action="{{url('admin/create')}}" method="post">
	Nama : <input type="text" name="name" value=" {{old('name')}} ">
	Email : <input type="email" name="email" value=" {{old('email')}} ">
	Password : <input type="password" name="password">
	{{csrf_field()}}
	<button type="submit">Submit</button>
</form>