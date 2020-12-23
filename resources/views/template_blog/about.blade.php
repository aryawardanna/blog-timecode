<!-- SECTION -->
@include('template_blog.head')
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 text-center">
				<h1 class="text-uppercase">About Us</h1>
				    <p class="lead">Learning coding is difficult, so it takes a lot of time</p>
			</div>
		</div>
	</div>
</div>
	<div class="section">
		<!-- container -->
		<div class="container">
						<!-- row -->
			<div id="hot-post" class="row hot-post">
				
				@yield('field')
				
            </div>
	

		
	</div>
	
	@include('template_blog.footer')