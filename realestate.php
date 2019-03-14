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


          
    <section>
      <h1 class="signuptext" style="font-size: 280%; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em; padding-top: 20px;padding-bottom: 50px;">B&B Real Estate</h1>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6">
         
                <p>We are a professionally managed Real Estate Agency, is established with a vision to market the real estate in Nepal and to represent builders and buyers in an organized, transparent and bring in professional integrity in Nepalese real estate business.  It first understands your needs and then advices and finds the perfect property within your budget.</p>
                <br>
                <p> 
                <ul>
                  <li>
                    &#10162; Transparent Buy,Sell, Rent, Lease
                  </li>

                  <li>
                    &#10162; Property Management
                  </li>
                  <li>
                    &#10162; Property Investment Consultancy
                  </li>
                  <li>
                    &#10162; Property Valuation Services
                  </li>
                  <li>
                    &#10162; Bank Finance
                  </li>
                </ul></p>
        </div>
        <div class="col-md-6">
          <img src="img/real.jpg" style="width: 600px; height:auto;">
        </div>
      </div>
      
    </div>

<div class="container" style="padding-top: 50px;">
  <div class="row">
                                  
                                    <!-- Nav tabs --><div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">House</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Land</a></li>
                                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Rent</a></li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home"><?php include 'house.php';?></div>
                                        <div role="tabpanel" class="tab-pane" id="profile"><?php include 'land.php';?></div>
                                        <div role="tabpanel" class="tab-pane" id="messages"><?php include 'house.php';?></div>
                                        
                                    </div>
</div>
                                </div>
  
</div>

<style>
  .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}

.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }

</style>

  </section>
<?php include 'footer.php'; ?>