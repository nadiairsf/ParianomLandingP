<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Website title -->
	<title>Parianom</title>
	<!-- Website meta description and keywords -->
	<meta name="description" content="Parianom merupakan platform jual beli pangan dan kriya berbasis mobile untuk mewujudkan penguatan ekonomi masyarakat dalam mendukung PEN ">
	<meta name="keywords" content="Parianom membangun ekonomi masyarakat">
	<!-- Website Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="fav-logo.ico" />
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{('css/bootstrap.min.css')}}">
	<!-- Ico Font CSS -->
	<link rel="stylesheet" href="{{('css/icofont.css')}}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{('css/animate.css')}}">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{('css/owl.carousel.min.css')}}">
	<!-- Index CSS -->
	<link rel="stylesheet" href="{{('css/index.css')}}">	
	<!-- Stylesheet -->
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'/>
	<script src="{{('js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
	<style>
		html {
  		scroll-behavior: smooth;
	}
	</style>
		<script type="text/JavaScript">
	    function killCopy(e){
	        return false
	    }
	    function reEnable(){
	        return true
	    }
	    document.onselectstart=new Function ("return false")
	    if (window.sidebar){
	        document.onmousedown=killCopy
	        document.onclick=reEnable
	    }
	</script>

</head>
<body oncontextmenu="return false" onselectstart="return false" onkeydown="if ((arguments[0] || window.event).ctrlKey) return false">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- PRELOADER Starts -->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	<!-- PRELOADER Ends -->
	<!-- Main Header including Banner Starts -->
	<?php
		$isi 	= DB::table('landpage')->get();
		$gambar = DB::table('img_landpage')->get();
	?>
	@foreach ($gambar as $g)
	@foreach ($isi as $i)
	
	<header class="main-header">
		<!-- Navigation Starts -->
		<nav class="navbar navbar-fixed-top transition" data-spy="affix" data-offset-top="100">
            <div class="container">
                <div class="navbar-header">
                    <!-- mobile menu icon -->
					<a href="#" id="nav-trigger" class="pull-right hidden nav-trigger">
						<i class="icofont icofont-justify-all"></i>
					</a>
					<!--/end mobile menu icon -->
                    <!-- site logo -->
					<div class="pull-left logo">
						<a href="index-2.html"><img src="{{ asset('/images/demo-2/'.$g->gbr1) }}" alt="App Landing Page"></a>
					</div>
					<!--/end site logo -->
                </div>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Beranda</a></li>
							<li><a href="#blog">Tentang Kami</a></li>
							<li><a href="#video">Video</a></li>
							<li><a href="#hubungi">Hubungi Kami</a></li>
							<li><a href="#download">Download</a></li>
							<li><a href="/shop-pangan">Belanja</a></li>
                    </ul>
                </div><!--/end navbar-collapse -->
            </div><!--/end container -->
        </nav>
		<!-- <nav class="navbar navbar-fixed-top transition" data-spy="affix" data-offset-top="100">
            <div class="container">
                <div class="navbar-header">
            
						<div class="pull-left logo hidden-sm">
							<a href="index-2.html"><img src="{{ asset('/images/demo-2/'.$g->gbr1) }}" alt="App Landing Page"></a>
						</div>
					
                </div>
					<div class="collapse navbar-collapse" id="navigation">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">{{ $i->teks1 }}</a></li>
							<li><a href="#belanja">{{ $i->teks2 }}</a></li>
							<li><a href="#download">{{ $i->teks3 }}</a></li>
							<li><a href="#video">{{ $i->teks4 }}</a></li>
							<li><a href="#hubungi">{{ $i->teks5 }}</a></li>
						</ul>
					</div> 
			</div>
		</nav> -->

		<section>
			<div id="home" class="slider-area">
				<div class="home-slider">
					<!-- Start slider-item -->
					<div class="pt-100 slider-item bg-img slide-bg-1 sm-no-padding">
						<div class="container">
							<div class="row flexbox-center">

								<div class="col-md-offset-1 col-md-4 hidden-xs hidden-sm">
									<div class="banner-image wow zoomIn">
										<img src="{{ asset('/images/demo-2/'.$g->gbr3) }}" class="img-responsive" alt="App Landing Page">
									</div>
								</div>
								<!-- /end col -->
								<div class="col-md-offset-1 col-md-6">
									<div class="banner-text sm-text-center wow fadeInDown">
										<h1>
											<strong>{{ $i->teks19 }}</strong> 
											mendukung ekonomi
											<strong>masyarakat</strong>
										</h1>
										<p>{{ $i->teks7 }}</p>
										<div class="btn-set">
											<a href="#" class="btn btn-round btn-transparent">
											<i class="icofont icofont-brand-apple"></i>Apple Store</a>
											<a href="https://play.google.com/store/apps/details?id=com.madhang_ae" class="btn btn-round btn-transparent"><i class="icofont icofont-brand-android-robot"></i>Play Store</a>
										</div>
									</div>
								</div>
								<!-- /end col -->
							</div><!-- /End row -->
						</div><!-- /End container -->
					</div>
					<!-- /End slider-item -->					
					<!-- Start slider-item -->
					<div class="pt-100 slider-item bg-img slide-bg-2 sm-no-padding">
						<div class="container">
							<div class="row flexbox-center">
								<div class="col-md-offset-1 col-md-4 hidden-xs hidden-sm">
									<div class="banner-image">
										<img src="{{ asset('/images/demo-2/'.$g->gbr4) }}" class="img-responsive" alt="App Landing Page">
									</div>
								</div>
								<!-- /end col -->
								<div class="col-md-offset-1 col-md-6">
									<div class="banner-text sm-text-center">
										<h1>
											<strong>{{ $i->teks19 }}</strong> 
											mendukung ekonomi
											<strong>masyarakat</strong>
										</h1>
										<p>{{ $i->teks7 }}</p>
										<div class="btn-set">
											<a href="#" class="btn btn-round btn-transparent">
											<i class="icofont icofont-brand-apple"></i>Apple Store</a>
											<a href="https://play.google.com/store/apps/details?id=com.madhang_ae" class="btn btn-round btn-transparent"><i class="icofont icofont-brand-android-robot"></i>Play Store</a>
										</div>
									</div>
								</div>
								<!-- /end col -->
							</div><!-- /End row -->
						</div><!-- /End container -->
					</div>
					<!-- /End slider-item -->
					<!-- Start slider-item -->
					<div class="pt-100 slider-item bg-img slide-bg-3 sm-no-padding">
						<div class="container">
							<div class="row flexbox-center">
								<div class="col-md-offset-1 col-md-4 hidden-xs hidden-sm">
									<div class="banner-image">
										<img src="{{ asset('/images/demo-2/'.$g->gbr5) }}" class="img-responsive" alt="App Landing Page">
									</div>
								</div>
								<!-- /end col -->
								<div class="col-md-offset-1 col-md-6">
									<div class="banner-text sm-text-center">
										<h1>
											<strong>{{ $i->teks19 }}</strong> 
											mendukung ekonomi
											<strong>masyarakat</strong>
										</h1>
										<p>{{ $i->teks7 }}</p>	
										<div class="btn-set">
											<a href="#" class="btn btn-round btn-transparent">
											<i class="icofont icofont-brand-apple"></i>Apple Store</a>
											<a href="https://play.google.com/store/apps/details?id=com.madhang_ae" class="btn btn-round btn-transparent"><i class="icofont icofont-brand-android-robot"></i>Play Store</a>
										</div>
									</div>
								</div>
								<!-- /end col -->
							</div><!-- /End row -->
						</div><!-- /End container -->
					</div>
					<!-- /End slider-item -->
				</div><!-- End home-slider -->
			</div><!-- End slider-area -->
		</section>
		<!-- /Home Slider Ends -->
			
		<!-- Navigation Ends -->
		<!-- Home Slider Starts -->
		
	</header>
	<!-- /Main Header including Banner Ends -->
	<!-- Featured Section Starts -->
	<section>
		<div class="padding-medium pb-25 light-bg blog-area" id="blog">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-offset-2 col-sm-8">
						<div class="mb-50 section-heading">
							<h2 class="section-title"> Apa Itu<strong class="primary-color"> Parianom ?</strong></h2>
						</div>
					</div><!-- /End col -->
				</div><!-- /End row -->
				<div class="row">
					<!-- single blog starts -->
					<div class="col-md-4 col-sm-6">
						<div class="p-35 mb-30 white-bg gray-border blog-single">
							<figure>
								<a href="#"><img src="{{ asset('/images/info1.png') }}" class="img-responsive" alt="Latest from Our Blog"></a>
								<figcaption>
									<h3 class="primary-color blog-title"><a href="#">SATU DATA UMKM <BR> KAB. MADIUN</a></h3>
									<p class="text-justify">Parianom adalah pusat data Koperasi dan UMKM Pemerintah Kabupaten Madiun yang seluruh kegiatan pembinaan Koperasi dan UMKM di wilayah Kabupaten Madiun 
										wajib terintergtrasi dengan sistem dari Parianom. Jika semua sudah terintegrasi maka kegiatan pembinaan Koperasi maupun UMKM dapat diarahkan secara tepat, efektif, dan berdampak.</p>
								</figcaption>
							</figure>
						</div>
					</div>
					<!-- single blog ends -->
					<!-- single blog starts -->
					<div class="col-md-4 col-sm-6">
						<div class="p-35 mb-30 white-bg gray-border blog-single">
							<figure>
								<a href="#"><img src="{{ asset('/images/info2.png') }}" class="img-responsive" alt="Latest from Our Blog"></a>
								<figcaption>
									<h3 class="primary-color blog-title"><a href="#">MODERNISASI PEMBINAAN UMKM</a></h3>
									<p class="text-justify">Parianom merupakan sistem manajemen kegiatan pembinaan Koperasi dan UMKM yang dharapkan secara efektif mampu memandu Koperasi dan UMKM dalam menentukan langkah modernisasi 
										cara pengelolaan dan memajukan lembaganya, sehingga koperasi dan UMKM betul-betul menjaid tulang punggung roda ekonomi yang tangguh, efektif, dan modern.
									<br><br>
									</p>

							</figcaption>
							</figure>
						</div>
					</div>
					<!-- single blog ends -->
					<!-- single blog starts -->
					<div class="col-md-4 col-sm-6">
						<div class="p-35 mb-30 white-bg gray-border blog-single">
							<figure>
								<a href="#"><img src="{{ asset('/images/info3.png') }}" class="img-responsive" alt="Latest from Our Blog"></a>
								<figcaption>
									<h3 class="primary-color blog-title"><a href="#">TATA KELOLA BERBASIS DATA</a></h3>
									<p class="text-justify">Menghadirkan tatakelola UMKM modern berbasis data yang vaid dalam memenuhi penyusunan kebijakan, integrasi aplikasi dan kolaborasi optimasi potensi Koperasi dan UMKM di Kabupaten Madiun.
										<br><br><br><br><br><br><br>
									</p>
								</figcaption>
							</figure>
						</div>
					</div>
					<!-- single blog ends -->
				</div><!-- /End row -->
			</div><!-- /End container -->
		</div><!-- /End blog-area -->
	</section>
	<!-- /Featured Section Ends -->
	<!-- App Overview Section Starts -->
	<section>
		<div class="padding-big bg-img app-overview-area" id="download">
			<div class="container">
				<div class="row">
					<!-- overview iphone -->
					<div class="col-md-offset-1 col-md-4">
						<div class="text-center app-overiew-photo">
							<img src="{{ asset('/images/demo-2/'.$g->gbr7) }}" class="img-responsive center-block" alt="iPhone">
						</div>
					</div>
					<!-- /overview iphone -->
					<!-- overview right content -->
					<div class="col-md-5">
						<div class="app-overview-lists sm-text-center">
							<h2 class="mb-40 app-overview-list-title">
								Mengapa Memilih
								<strong class="primary-color">{{ $i->teks19 }}</strong>
							</h2>
							<ul class="text-left list-item-arrow">
								<li>{{ $i->teks11 }}</li>
								<li>{{ $i->teks12 }}</li>
								<li>{{ $i->teks13 }}</li>
								<li>{{ $i->teks14 }}</li>
								<li>{{ $i->teks15 }}</li>
								<li>{{ $i->teks16 }}</li>
								<li>{{ $i->teks17 }}</li>
								<li>{{ $i->teks18 }}</li>
							</ul>
							<div class="text-center mt-40">
								<a href="#" class="btn btn-round btn-red btn-download">Download Sekarang</a>
							</div>
						</div>
					</div>
					<!-- /end overview right content -->
				</div><!-- /End row -->
			</div><!-- /End container -->
		</div><!-- /End app-overview-area -->
	</section>
	<!-- /App Overview Section Ends -->

	<!-- Video Section Starts -->
	<section  id="video">
		<div class="bg-img video-area">
			<div class="container">
				<div class="row padding-big flexbox-center xs-no-flexbox">
					<div class="col-sm-3">
						<div class="text-center video-play-icon">
							<a href="https://www.youtube.com/watch?v=668nUCeBHyY" class="popup-youtube">
								<i class="icofont icofont-ui-play circled-icon"></i>
							</a>
						</div>
					</div><!-- /End col -->
					<div class="col-md-offset-3 col-sm-6">
						<div class="color-white video-content xs-text-center">
							<h2 class="mb-25"></span>{{ $i->teks19 }}</h2>
							<p>{{ $i->teks7 }}	</p>	
						</div>
					</div><!-- /End col -->
				</div><!-- /End row -->
			</div><!-- /End container -->
		</div><!-- /End video-area -->
	</section>
	<!-- Video Section Ends -->
	@endforeach
	@endforeach
	<!--  Contact Section Starts -->
	<section>
		<div class="padding-big contact-area" id="hubungi">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-offset-2 col-sm-8">
						<div class="mb-50 section-heading">
							<h2 class="section-title">Butuh Bantuan ? <strong class="primary-color">Hubungi Kami</strong></h2>
							<p>Tanyakan apa yang kamu butuhkan.</p>
						</div>
					</div><!-- /End col -->
				</div><!-- /End row -->
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="contact-form clearfix">
							<form action="#">
								<div class="contact-field field-one-third">
									<label for="name" class="sr-only">Name: </label>
									<input type="text" class="form-control" id="name" required="required" placeholder="Nama Lengkap">
								</div>
								<div class="contact-field field-one-third">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" required="required" placeholder="Email">
								</div>
								<div class="contact-field field-one-third pull-right">
									<label for="sub" class="sr-only">Subject</label>
									<input type="text" class="form-control" id="sub" required="required" placeholder="Subjek">
								</div>
								<div class="contact-field">
									<label for="message" class="sr-only">Message</label>
									<textarea id="message" class="form-control" required="required" placeholder="Pesan"></textarea>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-round btn-red btn-submit">Submit</button>
								</div>
							</form>
						</div><!-- /End contact-form -->						
					</div><!-- /End col -->
				</div><!-- /End row -->
			</div><!-- /End container -->
		</div><!-- /End contact-area -->
	</section>
	<!-- / Contact Section Ends -->
	<!-- Start Back to Top -->
	<div id="back-top">
		<a href="#top"><i class="icofont icofont-arrow-up circled-icon"></i></a>
	</div>
	<!-- /End Back to Top -->	
	<!-- Footer starts -->
	<footer>
		<div class="dark-bg color-white footer-area">
			<div class="container">
				<div class="row xs-text-center">
					<div class="col-sm-5">
						<div class="footer-left">
							<p class="copyright-text">All Right Reserved &copy; 2021 | AE Techno </p>
						</div>
					</div><!-- /End col -->
					<!--<div class="col-sm-7">-->
					<!--	<div class="footer-right">-->
					<!--		<ul class="list-inline pull-right footer-menu xs-no-float">-->
					<!--			<li><a href="#">Home</a>-->
					<!--			<li><a href="#">About</a>-->
					<!--			<li><a href="#">Services</a>-->
					<!--			<li><a href="#">Privacy</a>-->
					<!--			<li><a href="#">Contact</a>-->
					<!--		</ul>-->
					<!--	</div>-->
					<!--</div><!-- /End col -->					
				</div><!-- /End row -->
				<div class="row">				
					<!-- Starts Fixed Social icons -->
					<i class="icofont icofont-arrow-right social-trigger hidden-xs"></i>
					<div class="fixed-social-bar">
						<ul class="text-center social-icons">
							<li><a href="#" target="_blank"><i class="icofont icofont-social-facebook circled-icon"></i></a></li>
							<li><a href="#" target="_blank"><i class="icofont icofont-social-twitter circled-icon"></i></a></li>
							<li><a href="#" target="_blank"><i class="icofont icofont-social-google-plus circled-icon"></i></a></li>
							<li><a href="#" target="_blank"><i class="icofont icofont-social-pinterest circled-icon"></i></a></li>
						</ul>
					</div>
					<!-- /Ends Fixed Social icons -->
				</div><!-- /End row -->
			</div><!-- /End container -->
		</div><!-- /End footer-area -->
	</footer>
	<!-- /Footer ends -->
	<!-- jQuery -->
	<script src="{{('js/jquery.2.1.1.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{('js/bootstrap.min.js')}}"></script>
	<!-- Owl Carousel JS-->
	<script src="{{('js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{('js/jquery.magnific-popup.min.js')}}"></script>
	<!-- Pie Chart JS -->
	<script src="{{('js/jquery.easypiechart.min.js')}}"></script>
	<!-- WoW JS -->
	<script src="{{('js/wow.min.js')}}"></script>
	<!-- Common JS -->
	<script src="{{('js/common.js')}}"></script>
	<!-- Main-2 JS -->
	<script src="{{('js/main-2.js')}}"></script>
</body>
</html>