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
					<div class="item active" style="background-image: url(img/jomsom.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color: #ff0000;"><span style="color: #fff;"> Mustang Journey</span></h2>
							
						</div>
					</div>
					<!-- end single slide -->
			

					<!-- single slide -->
					<div class="item" style="background-image: url(img/bus.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color: #ff0000;"><span style="color: #fff;"> Bus Reservation </span></h2>
						</div>
					</div>
						<div class="item" style="background-image: url(img/train.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color: #ff0000;"><span style="color: #fff;"> Train Reservation</span></h2>
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>

		</section>
		
    
					
		<section>
			<h1 class="signuptext" style="font-size: 280%; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em; padding-top: 20px;padding-bottom: 50px;">B&B Tours and Travel</h1>
    
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<p>B&B Tours and Travels, is a fully licensed and registered travel agency / company in Nepal and recognized by the tourism authority of the Government of Nepal and Nepal Tourism Board (NTB) as providing comprehensive Travel Package for leisure, Group, Charters & small-business traveler, backed by real-time Website & unmatched products.</p>
								<br>
								<p> 
								<ul>
									<li>
										&#10162; Prompt response
									</li>

									<li>
										&#10162; Trustworthy travel agency
									</li>
									<li>
										&#10162; Experienced tour operator
									</li>
									<li>
										&#10162; Unbetable value for money
									</li>
									<li>
										&#10162; Guarenteed Departures
									</li>
								</ul></p>
    		</div>
    		<div class="col-md-6">
    			<img src="img/tourism.jpg">
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
								<i class="fa fa-bus fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Bus Reservation</h3>
								
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-taxi fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Train Reservation</h3>
								
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
								<h3>Car/Van Reservation</h3>
								
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
		<?php include 'footertour.php'; ?>