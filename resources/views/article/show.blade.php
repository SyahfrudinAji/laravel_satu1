<form action=" {{url('article/show')}}" method="post">
<input type="hidden" name="id" value="{{$article->id}}">
	TItle : <input type="text" name="title" value="{{$article->title}}" disabled>
	<br>
	Content : <input type="text" name="content" value="{{$article->content}}" disabled>
	<br>
	 {{csrf_field()}}
</form>