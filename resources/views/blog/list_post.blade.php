@extends('template_blog.content')
@section('field')
<div class="col-md-8 hot-post-left">
	@foreach($data as $list_post)
		
	<div class="post post-row">
		<a class="post-img" href="{{ route('blog.field', $list_post->slug) }}" style="height: 250px"><img src="{{ asset($list_post->gambar)}}"></a>
		<div class="post-body">
			<h3 class="post-title"><a href="{{ route('blog.field', $list_post->slug) }}">{{ $list_post->judul }}</a></h3>
			<ul class="post-meta">
				<li><a href="author.html">{{ $list_post->users->name}}</a></li>
				<li>{{ $list_post->created_at}}</li>
			</ul>
			
		</div>
	</div>
	@endforeach
	<center>{{ $data->links()}}</center>
</div>
@endsection