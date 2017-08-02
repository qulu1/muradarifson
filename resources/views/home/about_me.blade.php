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
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
	<body>
		<div id="preloader">
			<div id="status">

			</div>
		</div>
		<div class="socialBar">
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
		<section id="about" data-offset class="color_nav">
			<div class="about_text_main">
				<h3 class="module">ABOUT ME</h3>
				<p class="module">An Azeri hitmaker, showman, composer, singer and producer.
					Was born in 1981, in Azerbaijani city of Sumqayit. From 1987 to 1998 have studied at schools #15 and #28, successfully graduating from the latter. Have earned a bachelor degree from Azerbaijan State Economic University in “International Economic Relations”. Is a TV and a radio DJ. From 2002 up until 2005 was a DJ at “Space Radio”.
				</p>
				<p class="module">From 2005 to 2007 was a host on Public TV and ITV radio. Was the first Azerbaijani commentator for 2006 Eurovision Song Contest.From 2007 to 2008 has been working as an editor at “M — Group Production”. From 2008 to 2010 was a musical director, show executive and a host at several TV projects of LiderTV.Since 2008 and till now Murad Arif is hosting “SOLO” -  a musical TV show on LiderTV. </p>
				<p class="module">Is the author of many songs for a number of popular Azerbaijani singers, such as Roya, Tunzala Aghayeva, Natavan Habibi, Faiq Aghayev, Elnara Halilova, Aygun Kyazimova, Ayaz Gasimov, Khayam Nisanov, Sevda Alekperzadeh. In 2009, his song Sevdiyini Söylə (Say that you love) performed by Natavan Habibi, took the first place at Bakı Gecələri (Baku Nights) song contest. Murad’s songs, performed by Elnara (Ay qız oyan – Wake up girl) and Natavan Habibi (Təyyarələr - Airplanes) had represented Azerbaijan on song contest of Turkish countries in Denizli, Turkey – “Turkcevizyon Muzik Festivali” in 2010 and 2011 respectively. His song “Istanbul” was featured in “Bosporus night – 4” album by popular Turkish DJ Suat Atesdagli, along with a number of remixes of famous Turkish songs.</p>
				<p class="module">Also, a number of songs by Murad Arif had been performed and were featured in albums by Turkish singers, such as Ziynet Sali, Nil Karaibrahimgil, Enbe Orkestrasi and etc. In 2010 he was a commentator of World Football Cup opening ceremony. In 2013, Rustam Kerimov represented Azerbaijan in Junior Eurovision Song Contest with the song “Me and my guitar” co-written by Murad Arif. In 2014 was a jury member of “Böyük Səhnə” (Big Stage) project, a platform which selects performers for the Eurovision Song Contest. Since 2014 had started his own singer career, with the song “Həyat Yoldaşımsan” (You are my wife).</p>
				<div class="about_logo_main">
					<div class="about_logo module">
						<img src="/images/logo copy.png" alt="">
					</div>
				</div>
			</div>
		</section>
		<div class="up">
			<img src= {{ url("/images/top.png") }}>
		</div>
	</body>
	<script src= {{url("/js/jquery.js")}} ></script>
	<script src={{url("/js/bootstrap.js")}}></script>
	<script src={{url("/js/jquery.nicescroll.js")}}></script>
	<script src={{url("/js/main.js")}}></script>
</html>
