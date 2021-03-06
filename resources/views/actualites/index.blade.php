<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Education &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('custumhome/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('custumhome/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('custumhome/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('custumhome/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('custumhome/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('custumhome/css/owl.theme.default.min.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('custumhome/css/flexslider.css') }}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{ asset('custumhome/css/pricing.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('custumhome/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('custumhome/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-right">
                            <p class="site">www.ruspinacentreformation.com</p>
                            <p class="num">Telephone: +216 26 822 812</p>
                            <ul class="fh5co-social">
                                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                                <li><a href="#"><i class="icon-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo"><a href="/"><i class="icon-study"></i>Ruspina<span>.</span></a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="/actualites">Actualites</a></li>
                                <li><a href="/formations">Formations</a></li>
                                <li><a href="/evenements">Evenements</a></li>
                                @if ( Auth::user() ) <li class="btn-cta"><a href="/home"><span>dashboard</span></a></li> @else <li class="btn-cta"><a href="/login"><span>Connexion</span></a></li>
                                <li class="btn-cta"><a href="/register"><span>Inscription</span></a></li>@endif
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
		</nav>
		<hr />
	
	

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Notre Actualites</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
                @foreach ($actualites as $f)
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url({{ asset('uploads/actualites')}}/{{ $f->affiche }});">
						</a>
						<div class="desc">
							<h3><a href="#">{{ $f->titre }}</a></h3>
							<p>{{ $f->description  }}</p>
						</div>
					</div>
                </div>
                @endforeach
			
				
				
				
				
			</div>
		</div>
	</div>

	<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Mike Smith</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Education</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('custumhome/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('custumhome/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('custumhome/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('custumhome/js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('custumhome/js/jquery.stellar.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('custumhome/js/owl.carousel.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('custumhome/js/jquery.flexslider-min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset('custumhome/js/jquery.countTo.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('custumhome/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('custumhome/js/magnific-popup-options.js') }}"></script>
	<!-- Count Down -->
	<script src="{{ asset('custumhome/js/simplyCountdown.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('custumhome/js/main.js') }}"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

