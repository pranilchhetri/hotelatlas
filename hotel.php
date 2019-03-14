<?php include 'header.php'; ?>
	
        <!--
        Home Slider
        ==================================== -->
		
					<!-- end single slide -->
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
					<div class="item active" style="background-image: url(img/hotel/1.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color: #ff0000;"><span style="color: #fff;">Hotel </span>B&B</h2>
							
						</div>
					</div>
					<!-- end single slide -->
			

					<!-- single slide -->
					<div class="item" style="background-image: url(img/hotel/2.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color: #ff0000;"><span style="color: #fff;"> Conference Hall </span></h2>
						</div>
					</div>
						<div class="item" style="background-image: url(img/hotel/3.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color: #ff0000;"><span style="color: #fff;"> Hotel Room</span></h2>
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
    
					
		<section>
			<h1 class="signuptext" style="font-size: 280%; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em; padding-top: 20px;padding-bottom: 50px;">Hotel B&B</h1>
    
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			
								<p>Comfortable, great food and great views , what more can you ask. All the staff were genuinely helpful and informative. Lots to see and do close by. An ideal base for the Butwal.This was an added entertainment and added to the experience. </p>
								<br>
								<p> 
								<ul>
									<li>
										&#10162; Well Furnished Rooms
									</li>

									<li>
										&#10162; Conference Hall
									</li>
									<li>
										&#10162; Wi-Fi & Internet
									</li>
									<li>
										&#10162; Free Stay for Driver
									</li>
									<li>
										&#10162; 24 Hours Power Backup
									</li>
								</ul></p>
    		</div>
    		<div class="col-md-6">
    			<img src="img/hotel/4.jpg" style="width: 500px; height: auto;">
    		</div>
    	</div>
    	
    </div>
</section>

    <section id="features" class="features" style="padding-top: 30px; padding-bottom: 50px;">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Features</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>



					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-wifi fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Free Wifi</h3>
								
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-angellist fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>24 hours service</h3>
								
						</div>
					</div>
				</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-car fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Free parking service</h3>
								
						</div>
					</div>
					<!-- end service item -->
						
				</div>
			</div>
		</div>
		
		</section>
		
        <!--
        End Features
        ==================================== -->
		
        <!--
        End Home SliderEnd
        ==================================== -->
		<?php include 'footerhotel.php'; ?>