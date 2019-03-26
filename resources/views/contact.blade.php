<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Imperial service club | Contact</title>
<!-- Stylesheets -->
<link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('public/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{asset('public/css/style.css')}}" rel="stylesheet">
<link href="{{asset('public/css/jquery-ui.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('public/images/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{asset('public/images/favicon.ico')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{asset('public/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <style>
        #map-canvas{
            width: 100%;
            height: 400px;
        }
    </style>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
    <header class="main-header">
    	
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="{{asset('public/images/logo.png')}}" class="header-logo" alt=""></a></div>
                        </div>
                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('about')}}">About Us</a></li>
                                        <li><a href="{{url('services')}}">Services</a></li>
                                        <li><a href="{{url('membership')}}">Membership</a></li>
                                        
                                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                                        
                                     </ul>
                                </div>
                            </nav><!-- Main Menu End-->
                            
                            
                            
                        </div><!--Nav Outer End-->
                        
                    </div>    
                </div>
            </div>
        </div>
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="{{asset('public/images/logo.png')}}" class="header-logo" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About Us</a></li>
                                <li><a href="{{url('services')}}">Services</a></li>
                                <li><a href="{{url('membership')}}">Membership</a></li>
                                
                                <li><a href="{{url('contact')}}">Contact Us</a></li>
                                
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
    
    <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}}">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>contact</h1>
                <ul class="bread-crumb">
                	<li><a href="index.html">Home</a></li>
                    <li>contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	
            <div class="contact-info">
            	<div class="row clearfix">
                	
                	<div class="info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box"><span class="flaticon-house-outline"></span></div>
                            <h4>VISIT</h4>
                            2 Harbinger Rd, Isle of Dogs <br>,  London E14 3AA, UK
                        </div>
                    </div>
                    
                    <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box"><span class="flaticon-technology-1"></span></div>
                            <h4>Call</h4>
                            +44 312-640-7600
                        </div>
                    </div>
                    
                    <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box"><span class="flaticon-envelope-1"></span></div>
                            <h4>Mail</h4>
                            Info@imperialserviceclub.com
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <h2>Say Hello</h2>
                    
            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="username" value="" placeholder="Name *" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Email *" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="phone" value="" placeholder="Phone *" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="subject" value="" placeholder="Subject *" required>
                        </div>
                        
                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Type Your Message"></textarea>
                            </div>
                        </div>
                        
                        <div class="column col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one">Submit Now</button>
                            </div>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            <!--End Contact Form-->
            
        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Map Section-->
    <section class="map-section">
        <div class="map-outer">

            <!--Map Canvas-->
            <div id="map-canvas" class="we-onmap wow fadeInUp" data-wow-delay="0.3s" ></div>
        </div>
    </section>
    


	<!--Subscribe Style One-->
    <section class="subscribe-style-one" style="background-image:url({{asset('public/images/background/patten-1.png')}}">
    	<div class="auto-container">
            <div class="row clearfix">
                <div class="column col-md-7 col-sm-6 col-xs-12">
                    <h2>SUBSCRIBE FOR NEWSLETTER</h2>
                    <div class="text">Be up to date with our latest news and exclusive offers</div>
                </div>
                <div class="column col-md-5 col-sm-6 col-xs-12 text-right">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email" required>
                            <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<!--End Subscribe Style One-->
 
    
    <!--Main Footer-->
    <footer class="main-footer">
    	<div class="widgets-section">
        	<div class="auto-container">
            	<div class="row clearfix">
                    <!--Footer Column-->
                    <div class="footer-column col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <div class="footer-logo"><a href="index.html"><img src="{{asset('images/logo.png')}}" class="header-logo" alt=""></a></div>
                            <div class="widget-content">
                                <div class="text">Imperial Service is a market leader in providing global luxury concierge, professional network and unique lifestyle management services.</div>
                                <ul class="contact-info">
                                    <li><div class="icon"><span class="flaticon-house"></span></div> 2 Harbinger Rd, Isle of Dogs London E14 3AA, UK</li>
                                    <li><div class="icon"><span class="flaticon-technology-1"></span></div>+1 312-640-7600, </li>
                                    <li><div class="icon"><span class="flaticon-envelope-1"></span></div>Info@imperialserviceclub.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget gallery-widget">
                            <h2>Our GALLERY</h2>
                            <div class="widget-content">
                                <div class="images-outer clearfix">
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/resource/featured-image-1.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="{{asset('public/images/gallery/1.jpg')}}" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/resource/featured-image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="{{asset('public/images/gallery/2.jpg')}}" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/resource/featured-image-3.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="{{asset('public/images/gallery/3.jpg')}}" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/resource/featured-image-1.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="{{asset('public/images/gallery/4.jpg')}}" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/resource/featured-image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="{{asset('public/images/gallery/5.jpg')}}" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/resource/featured-image-3.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="{{asset('public/images/gallery/6.jpg')}}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Footer Column-->
                	<div class="footer-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    	<div class="footer-widget partner-widget">
                        	<h2>OUR PARTNERS</h2>
                            <!--footer sponsors slider-->
                            <div class="footer-sponsors-slider owl-carousel owl-theme">
                            	<div class="slide">
                                	<a href="#"><img src="{{asset('public/images/sponsors/footer-sponsor-1.png')}}" alt="" /></a>
                                </div>
                                <div class="slide">
                                	<a href="#"><img src="{{asset('public/images/sponsors/footer-sponsor-2.png')}}" alt="" /></a>
                                </div>
                                <div class="slide">
                                	<a href="#"><img src="{{asset('public/images/sponsors/footer-sponsor-3.png')}}" alt="" /></a>
                                </div>
                                <div class="slide">
                                	<a href="#"><img src="{{asset('public/images/sponsors/footer-sponsor-4.png')}}" alt="" /></a>
                                </div>
                                <div class="slide">
                                	<a href="#"><img src="{{asset('public/images/sponsors/footer-sponsor-1.png')}}" alt="" /></a>
                                </div>
                                <div class="slide">
                                	<a href="#"><img src="{{asset('public/images/sponsors/footer-sponsor-2.png')}}" alt="" /></a>
                                </div>
                                <div class="slide">
                                	<a href="#"><img src="{{asset('public/images/sponsors/footer-sponsor-3.png')}}" alt="" /></a>
                                </div>
                                <div class="slide">
                                	<a href="#"><img src="{{asset('public/images/sponsors/footer-sponsor-4.png')}}" alt="" /></a>
                                </div>
                            </div>
                            
                            <h2>NEWSLETTTER SIGN-UP</h2>
                            <!--newsletter form-->
                            <div class="newsletter-form">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email" required>
                                        <button type="submit" class="theme-btn">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
        	<div class="auto-container">
            	<div class="row clearfix">
                	<div class="column col-md-6 col-sm-6 col-xs-12">
                    	<div class="copyright">&copy; 2017 Imperial service club - All Rights Reserved</div>
                    </div>
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                    	<div class="footer-icon">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-youtube"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div> 

<script src="{{asset('public/js/jquery.js')}}"></script> 
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/revolution.min.js')}}"></script>
<script src="{{asset('public/js/jquery-ui.js')}}"></script>
<script src="{{asset('public/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('public/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('public/js/owl.js')}}"></script>
<script src="{{asset('public/js/wow.js')}}"></script>
<script src="{{asset('public/js/appear.js')}}"></script>
<script src="{{asset('public/js/validate.js')}}"></script>
<script src="{{asset('public/js/script.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;&key=AIzaSyC8QxwIfsIOtdjP2KfUaAoBBZkLfu37deQ&amp;&scale=2" type="text/javascript"></script>
		<script>
			$(document).ready(function(){
							var myLatLng = {lat: 45.419559, lng: -75.696561}; 
			
				var map = new google.maps.Map(document.getElementById('map-canvas'), {
				zoom: 17,
				center: myLatLng
				});
			
				var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: 'IMPERIAL'
				});
			});
		</script>
</body>
</html>