<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TimeCode</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('/frontend/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link rel="stylesheet" href="/frontend/css/styles.css" />

</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="index.html" class="logo"><img src="{{ asset('/frontend/img/timecode.png')}}" alt="logo"></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form action="{{route('blog.search')}}" method="GET">
								<input class="input" name="search" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<li><a href="{{ url('')}}">Beranda</a></li>
						<li class="has-dropdown">
							<a>Categories</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										@foreach($category_side as $new )
										<li><a href="{{ route('blog.category', $new->slug)}}">{{ $new->name}}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
						</li>
						
						<li><a href="{{ route('blog.list')}}">List Post</a></li>
						<li><a href="{{ route('blog.contact')}}">Contact Me</a></li>
						<li><a href="{{ route('blog.about')}}">About</a></li>
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="{{ url('')}}">Beranda</a></li>
					<li class="has-dropdown">
						<a>Categories</a>
						<ul class="dropdown">
							@foreach($category_side as $new )
								<li><a href="{{route('blog.category', $new->slug)}}">{{ $new->name}}</a></li>
							@endforeach
						</ul>
					</li>
					<li><a href="{{ route('blog.list')}}">List Post</a></li>
					<li><a href="{{ route('blog.contact')}}">Contact Me</a></li>
					<li><a href="{{ route('blog.about')}}">About</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->