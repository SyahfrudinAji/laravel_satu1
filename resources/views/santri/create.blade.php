<form action=" {{url('santri/create')}}" method="post">
	Nama : <input type="text" name="name">
	<br>
	Alamat : <input type="text" name="alamat">
	<br>
	Tgl Lahir : <input type="text" name="tgl_lahir">
	<br>
	Jenis Kelamin : <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
	| <input type="radio" name="jenis_kelamin" value="P"> Perempuan <br>
	{{csrf_field()}}
	<button  type="submit">Submit</button>
</form>