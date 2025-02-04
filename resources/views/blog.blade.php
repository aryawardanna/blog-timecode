@extends('template_blog.content')
	
@section('field')
<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img"><img src="{{ asset('/frontend/img/comp.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">Programmer</a>
							</div>
							<ul class="post-meta">
								<li><a>Maulana Pribadi</a></li>
								<li>19 Mei 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img"><img src="{{ asset('/frontend/img/robot.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">Teknologi</a>
							</div>
							<ul class="post-meta">
								<li><a>Arya Wardana</a></li>
								<li>20 April 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img"><img src="{{ asset('/frontend/img/banner.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fynci</a>
							</div>
							<ul class="post-meta">
								<li><a href="">Himaprodi SI</a></li>
								<li>20 Desember 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
	
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.field', $post_terbaru->slug ) }}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">{{ $post_terbaru->name }}</a>
									</div>
									<h3 class="post-title"><a href="#">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="#">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
			
					</div>
					<!-- /row -->

	
				</div>
				
		
		
			<!-- /row -->
@endsection