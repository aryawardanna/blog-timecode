@extends('template_blog.content')
@section('field')
<div class="col-md-8 hot-post-left">
	<div class="col-md-8">
					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Contact Information</h2>
						</div>
						<p>Bila ada kekurangan, atau mau ditanyakan silahkan menghubungi email dibawah. Kalau untuk no hp itu tidak aktif!</p>
						<ul class="contact">
							<li><i class="fa fa-phone"></i> 111-111-222-333</li>
							<li><i class="fa fa-envelope"></i> <a href="#">timecode@gmail.com</a></li>
							<li><i class="fa fa-map-marker"></i>Karangasem, Bali</li>
						</ul>
					</div>

					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Email us</h2>
						</div>
						<form>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input class="input" type="text" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="input" name="message" placeholder="Message"></textarea>
									</div>
									<button class="primary-button">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
</div>
@endsection