<!DOCTYPE html>
<html>
	<head>
		<title>Murad Arif Website</title>
		<meta charset="UTF-8">
		<meta property="og:url" content="http://muradarif.az/" />
		<meta property="og:type" content="profile" />
		<meta property="og:title" content="Murad Arif Website" />
		<meta property="og:description" content="Welcome to Murad Arif Website" />
		<meta property="og:image" content={{ url("/images/endLogo.png") }} />
		<meta name="keywords" content="Murad Arif Composer Singer Azeri Singer" />
		<meta name="description" content="Murad Arif Website" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/fancy/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
	<body>
		<div id="preloader">
			<div id="status">
			</div>
		</div>
		<div class="socialBar module">
			<div>
				<a href="https://www.facebook.com/muradarifmusic" target="_black"><i class=" fa-2x fa fa-facebook" aria-hidden="true"></i></a>
			</div>
			<div>
				<a href="https://www.instagram.com/muradarif/" target="_black"><i class="fa-2x fa fa-instagram" aria-hidden="true"></i></a>
			</div>
			<div>
				<a href="https://twitter.com/muradarif" target="_black"><i class="fa-2x fa fa-twitter" aria-hidden="true"></i></a>
			</div>
			<div>
				<a href="https://www.youtube.com/channel/UCtkPp_dFlRUdXStSU18bxDQ" target="_black"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>
			</div>
		</div>
		<header id="header">
			<div class="header_main">
				<div class="burger">
					<img src= {{ url("/images/burger.png") }} alt="">
				</div>
				<ul>
					<a href="/"><li class="scroll" data-section='home'>Home</li></a>
					<a href="singer"><li class="scroll" data-section='show_man'>Singer</li></a>
					<a href="composer"><li class="scroll" data-section='singer'>Composer</li></a>
					<a href="gallery"><li class="scroll" data-section='gallery'>Gallery</li></a>
					<a href="interview"><li class="scroll" data-section='interview'>Interview</li></a>
					<a href="about"><li class="scroll" data-section='about'>About me</li></a>
				</ul>
			</div>
		</header>
		<section id="gallery" data-offset class="color_nav">
			<div class="gallery_main">
				<h3 class="module">GALLERY</h3>
				<div class="container">
					<div class="row">
						@foreach($gallery as $key)
							<div class="col-md-4">
								<div class="gallery_images module">
									<a class="fancybox" rel="group" href="/images/{{ $key->photo }}">
										<img src= {{ url("/images/" . $key->photo) }} alt="" />
									</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</section>
		<div class="up">
			<img src= {{ url("/images/top.png") }}>
		</div>
	</body>
	<script src={{url("/js/jquery.js")}} ></script>
	<script src={{url("/js/bootstrap.js")}}></script>
	<script type="text/javascript" src="/fancy/jquery.fancybox.js"></script>
	<script src={{url("/js/jquery.nicescroll.js")}}></script>
	<script src={{url("/js/main.js")}}></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
</html>
