<body>
	
	<br>
	<a href="{{ url('article/create')}}">Create Article</a>
	<br><br>

	<?php $no=1; ?>
	@foreach($article as $row)

	</b>Article NUmber {{$no++}}</b><br>
	- 	itle = {{$row->title}} <br>	
	-	Content = (substr($row->content, 0 . ,10));
	- 	action = 
			<a her="{{url('article/show/', $row->id)}}">Detail</a>|
			<a her="{{url('article/edit/', $row->id)}}">Edit</a>|
			<a her="{{url('article/delete/', $row->id)}}">Delete</a>|
	@endforeach

</body>