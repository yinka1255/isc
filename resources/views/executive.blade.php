<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Imperial service club | Executive</title>
<!-- Stylesheets -->
<link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('public/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{asset('public/css/style.css')}}" rel="stylesheet">
<link href="{{asset('public/css/jquery-ui.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
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
    <script src="https://js.paystack.co/v1/inline.js"></script>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
    <script src="{{asset('public/js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script>
            function getSuccess(data){
                $.confirm({
                        title: 'Success',
                        content: data,
                        type: 'green',
                        typeAnimated: true,
                        buttons: {
                                Ok: function () {
                                }
                        }
                });
            }
    
        function getError(data){
                $.confirm({
                        title: 'Error!',
                        content: data,
                        type: 'red',
                        typeAnimated: true,
                        buttons: {
                                Ok: function () {
                                }
                        }
                });
            }
        </script>
        @if(Session::has('error'))
        <script>
            getError("{{Session::get('error')}}");
        </script>
        @endif	
        @if(Session::has('success'))
        <script>
            getSuccess("{{Session::get('success')}}");
        </script>
        @endif	

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
                <h1>executive</h1>
                <ul class="bread-crumb">
                	<li><a href="index.html">Home</a></li>
                    <li>Executive</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	
            
            <h2>ECONOMY</h2>
                    
            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="{{url('add_member')}}" id="contact-form">
                    <div class="row clearfix" style="margin: auto;width: 100%;">
                        <div class="col-md-3 hidden-sm">
                        </div>
                        <div class="col-md-6">
                            <div class="row clearfix">
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" id="inputName" value="" placeholder="Name *" required>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="form-group col-md-12">
                                    <input type="email" name="email" value="" id="inputEmail" placeholder="Email *" required>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="form-group col-md-12">
                                    <input type="text" name="phone" value="" id="inputPhone" placeholder="Phone *" required>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="form-group col-md-12">
                                    <input type="text" name="address" value="" id="inputAddress" placeholder="Full address *" required>
                                </div>
                            </div>
                            <input type="hidden" name="membership" id="inputMembership" value="Executive" required>
                            <input type="hidden" name="amount" id="inputAmount" value="80000" required>
                            
                            <div class="column col-md-12 text-center">
                                <div class="form-group">
                                    <button type="button" onclick="payWithPaystack()" class="theme-btn btn-style-one">Pay $80,000 Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
            <!--End Contact Form-->
            
        </div>
    </section>
    <!--End Contact Section-->
    
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
		
        
        <form>
                <script>
                    
                    function payWithPaystack(){
                        var name = $("#inputName").val();
                        var email = $("#inputEmail").val();
                        var phone = $("#inputPhone").val();
                        var amount = $("#inputAmount").val();
                        var membership = $("#inputMembership").val();
                        var address = $("#inputAddress").val();
        
                        if(amount.length < 1){
                            getError("Kindly select an amount you'd like to donate");
                            return;
                        }
                        if(phone.length < 1 || name.length < 1){
                            getError("Kindly note that all fields are mandatory. These information are needed to generate your e-receipt");
                            return;
                        }
                        var handler = PaystackPop.setup({
                            key: "pk_live_44879993078226bd019febc572062f2cafc95db5",
                            email: email,
                            amount: amount+"00",
                            ref: Date.now(),
                            currency: "GBP",
                            metadata: {
                                custom_fields: [
                                { display_name: "Name", variable_name: "name", value: name },
                                { display_name: "Email", variable_name: "email", value: email },
                                { display_name: "Phone", variable_name: "phone", value: phone },
                                { display_name: "Amount", variable_name: "amount", value: amount },
                                { display_name: "Membership", variable_name: "Membership", value: membership },
                                { display_name: "Address", variable_name: "address", value: address },
                                
                                ]
                            },
                            callback: function(response){
                                getSuccess("We appreciate your patronage. We would definetly get back to you within 24 hours");
                                document.getElementById("pay-form").submit();
                                
                            },
                            onClose: function(){
                                getError('Transaction Cancelled');
                                
                            }
                        });
                        handler.openIframe();
                    }
        
                </script>
            </form>
        
</body>
</html>