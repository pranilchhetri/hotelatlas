<?php include 'header.php';
?>
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/logo1.png" style="height: 50px;padding-top: 5px; width: auto;" alt="Brandi">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" id="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#">Home</a></li>
                        <li><a href="#features">Our Portfolio</a></li>
                        <li><a href="#works">Gallery</a></li>
                        
                        <li><a href="#last">Contact Us</a></li>
                        
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
			<style>
#mySidenav a {
    position: absolute;
    z-index: 2;
    left: -110px;
    transition: 0.3s;
    padding: 15px;
    width: 150px;
    text-decoration: none;
    font-size: 12px;
    color: white;
    border-radius: 0 5px 5px 0;
    position: fixed;
}

#mySidenav a:hover {
    left: 0;
}

#about {
    top: 80px;
    background-color: #3B5998;
}

#blog {
    top: 140px;
    background-color: #2196F3;
}

#projects {
    top: 200px;
    background-color: #3F729B;
}

#contact {
    top: 260px;
    background-color: #e4405f;
}
.icon{
  float: right;
  width: 40px;
  height: auto;
}
</style>
		
<div id="mySidenav" class="sidenav">
  <a href="index.php" id="about">Home<i class="fa fa-home fa-2x" style="float: right;"></i></a>
  <a href="toursandtravel.php" id="blog">Tours and Travel<i class="fa fa-plane fa-2x" style="float: right;"></i></a>
  <a href="hotel.php" id="projects">Hotel<i class="fa fa-cutlery fa-2x" style="float: right;"></i></a>
  <a href="realestate.php" id="contact">Real Estate<i class="fa fa-building fa-2x" style="float: right;"></i></a>
</div>
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div class="item active" style="background-image: url(img/tours.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color: #ff0000;">B & B <span style="color: #fff;"> Tours and Travels!</span></h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/The Journey</span> is the destination.</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">Reservation of Train, Bus, Car, Van.<br><br>
							Contact: +977-71-546119,9857030119</p>
							
							<ul class="text-center social-links">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
			

					<!-- single slide -->
					<div class="item" style="background-image: url(img/hotel.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color: #ff0000;"><span style="color: #fff;"> Hotel </span>B & B </h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/The Heart</span> of hospitality.</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">Well furnished room, Conference Hall,Free-Wifi, Great View.
								<br><br>Contact: +977-71-680955,9857030119</p>
							
							

							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
						<div class="item" style="background-image: url(img/realstate.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color: #ff0000;">B & B <span style="color: #fff;"> Real Estate</span></h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/The Secret</span> of getting ahead is getting started.</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">Transparent Buy,Sell, Rent, Lease</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
        <!--
        Features
        ==================================== -->
		
		<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Portfolio</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<style>
.button {
    background-color: #0eb493; /* Green */
    border: none;
    color: white;
    border-radius: 50px;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    margin: auto;
    display: block; 
}


.button1 {
    background-color: white; 
    color: black; 
    border: 1px solid #0eb493;
}

.button1:hover {
    background-color: #0eb493;
    color: white;
}

</style>


					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-plane fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>B&B Tours and Travels</h3>
								<p>B&B Tours and Travels, is a fully licensed and registered travel agency / company in Nepal and recognized by the tourism authority of the Government of Nepal and Nepal Tourism Board.</p>
								<br>
								<div>
									<a href="toursandtravel.php"><button class="button button1">
										Know More!
										
									</button></a>
								</div>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-cutlery fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Hotel B&B</h3>
								<p>Comfortable, great food and great views , what more can you ask. All the staff were genuinely helpful and informative. Lots to see and do close by. An ideal base for the Butwal.</p><br><br><div>
									<a href="hotel.php"><button class="button button1">
										Know More!
										
									</button></a>
							</div>
						</div>
					</div>
				</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-building fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>B&B Real Estate</h3>
								<p>We are a professionally managed Real Estate Agency, is established with a vision to market the real estate in Nepal and to represent builders and buyers.</p><br><br><div>
									<a href="realestate.php"><button class="button button1">
										Know More!
										
									</button></a>
							</div>
						</div>
					</div>
					<!-- end service item -->
						
				</div>
			</div>
		</section>
		
        <!--
        End Features
        ==================================== -->
		
		<section id="works" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>Gallery</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>B&B Service is flourishing it's ply in tours and travels , hotel and real estate.Few snaps are shown below.</p>
					</div>
					
					<div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
							<li><a href="javascript:;" data-filter=".branding" class="filter">Tours and travel</a></li>
							<li><a href="javascript:;" data-filter=".web" class="filter">Hotel</a></li>
							<li><a href="javascript:;" data-filter=".logo-design" class="filter">Real Estate</a></li>
							
						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="project-wrapper">
			
				<figure class="mix work-item branding">
					<img src="img/works/1.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/1.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Beautiful Pokhara</h4>
						<p>B&B Tours and Travels</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item web">
					<img src="img/works/17.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/17.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Chicken Dish</h4>
						<p>Hotel B&B</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="img/works/9.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/9.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Buy and Sell Property</h4>
						<p>B&B Real Estate</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item branding">
					<img src="img/works/4.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/4.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Paragliding at Pokhara</h4>
						<p>B&B Tours and Travels</p>
					</figcaption>
				</figure>
			
				<figure class="mix work-item logo-design">
					<img src="img/works/6.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/6.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>House in sell</h4>
						<p>B&B Real Estate</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item web">
					<img src="img/works/8.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/8.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>View of Bedroom</h4>
						<p>Hotel B&B</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="img/works/15.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/15.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Housing</h4>
						<p>B&B Real Estate</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item web">
					<img src="img/works/13.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/13.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Conference Hall</h4>
						<p>Hotel B&B</p>
					</figcaption>
				</figure>
				
			</div>
		

		</section>
		
        <!--
        End Our Works
        ==================================== -->
        
        <!--
        Meet Our Team
        ==================================== -->		
<!--
        Contact Us
        ==================================== -->		
		
		<section id="last" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Let’s Discuss</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Your feedbacks are highly appreciable.Fill free to contact us.</p>
					</div>
					
					<!-- contact address -->
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<h5><strong>Hotel B&B</strong> </h5>
							<p>+977-71-680955,9857030119</p><br>
							<h5><strong>B&B Tour & Travels</strong></h5>
							<p>+977-71-546119,9857030119</p><br>
							<p>Butwal-4 Traffic chowk</p>
							<p>Rupandehi Nepal</p>
							<p>basantapandey909@gmail.com</p>
						</div>
					</div>
					<!-- end contact address -->
					
					<!-- contact form -->
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h3>Say hello!</h3>
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="Name" class="form-control">
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="Email" class="form-control">
									</div>
								</div>
								<div class="input-group">
									<textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
								</div>
								<div class="input-group">
									<input type="submit" id="form-submit" class="pull-right" value="Send message">
								</div>
							</form>
						</div>
					</div>
					<!-- end contact form -->
					
					<!-- footer social links -->
					<!--
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<ul class="footer-social">
							<li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
							<li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
							<li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
			
			<div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
			
		</section>
		-->
        <!--
        End Contact Us
        ==================================== -->
		
		</div>
	</div>
</section> 

		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="img/logo1.png" style="height: 100px; width: auto; padding-bottom: 20px;" alt="">
							<p>B&B Service is flourishing it's ply in tours and travels , hotel and real estate.Few snaps are shown below.</p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							<h6>Subscribe </h6>
							<form action="#" class="subscribe">
								<input type="text" name="subscribe" id="subscribe">
								<input type="submit" value="&#8594;" id="subs">
							</form>
							<p>Subscribe us for updates. </p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Explore</h6>
							<ul>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Google</a></li>
								
							</ul>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="footer-single">
							<h6>Support</h6>
							<ul>
								<li><a href="#features">Portfolio</a></li>
								<li><a href="#work">Work</a></li>
								<li><a href="#contact">Contacts</a></li>
							</ul>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2018 <a href="http://themefisher.com/">B&BService.com</a>. All rights reserved. Designed & developed by <a href="http://pranilchhetri.com.np">Pranil G.C</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
    <!--    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>-->
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
    </body>
</html>
