<body>
	
	<br>
	<a href="{{ url('article/create')}}">Create Article</a>
	<br><br>

	<?php $no=1; ?>
	@foreach($article as $row)

	</b>Article Number {{$no++}}</b>
<br>
	- 	Title = {{$row->title}}
<br>	
	-	Content = {{substr($row->content,0, 10)}}
<br>
	- 	action = 
			<a href=" {{url('article/show',$row->id)}} ">show</a>
			<a href=" {{url('article/edit',$row->id)}} ">edit</a>
			<a href=" {{url('article/hapus', $row->id)}} ">delete</a> <br>
<br>
	@endforeach

	{{$article->links()}}

</body>