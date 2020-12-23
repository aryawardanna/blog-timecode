@extends('template_blog.content')

@section('field')

	@foreach($data as $field_post)

	<div id="post-header" class="page-header">
			<div class="page-header-bg" style="
			background-image: url( {{asset($field_post->gambar) }} );" 

			data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="#">{{ $field_post->category->name }}</a>
						</div>
						<h1>{{ $field_post->judul }}</h1>
						<ul class="post-meta">
							<li><a href="#">{{ $field_post->users->name }}</a></li>
							<li>{{ $field_post->created_at }}</li>
						
							<!-- <li><i class="fa fa-eye"></i> 807</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<div class="col-md-8 hot-post-left">
	<br>
		<div class="section-row">



		{!! $field_post->content !!}

		</div>
	@endforeach
	</div>

@endsection