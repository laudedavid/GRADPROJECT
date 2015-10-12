<!DOCTYPE HTML>
<html>
	<head>
		<title>CAKEOLOGY</title>
		<link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="bootstrap/js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="bootstrap/css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		
	</head>
	<style>
	 a{
	 	color:white;
	 }
	 a.hover{
	 	color:pink;
	 }
	</style>
	<body>
		{{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::style('bootstrap/css/style.css') }}
    {{ HTML::script('bootstrap/css/bootstrap.css') }}
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul>
						<li>{{HTML::link('/myaccountBuyer','My Account', array('style' => 'color:white, hover: pink'))}}</li>
						<li>{{HTML::link('/logoutUser','Logout', array('style' => 'color:white, hover: pink'))}}</li>
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="top-header-center">
					<p><span class="cart"> </span>BUYER'S PAGE</p>
				</div>
				<div class="top-header-right">
					<ul>						
						<li style="margin-top:1px; margin-left:135px; color:white"><h4>&nbsp;&nbsp;Welcome, &nbsp;</h4></li>
						<li style="margin-top:1px; color:white">
							<h4>
								@foreach($user as $users)
                        		
                                @endforeach
                                	 {{$name=$users['name'];}}
  
							</h4></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- /top-header -->
		<!-- main-menu -->
		<div class="main-menu">
			<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
				<ul>
					<li class="active">{{HTML::link('/homeBuyer','Home', array('style' => 'color:white, hover: pink'))}}</li>
					<li>{{HTML::link('/productsBuyer','Products', array('style' => 'color:white, hover: pink'))}}</li>
					<li>{{HTML::link('/singlepageSeller','Sellers', array('style' => 'color:white, hover: pink'))}}</li>
					<li>{{HTML::link('/createCake','Create Cake', array('style' => 'color:white, hover: pink'))}}</li>
					<div class="clearfix"> </div>
				</ul>
			</div>	
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->

				<!-- logo -->
				<div class="logo">
					<img src="bootstrap/images/logo1.png" title="Sweetcake" />
				</div>
				<!-- logo -->
			</div>
		</div>
		<!-- /main-menu -->
		<!-- banner -->
		<div class="container">
				<div class="img-slider">
						<!----start-slider-script---->
					<script src="bootstrap/js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 500,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img  src="bootstrap/images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELICIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="bootstrap/images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <!-- share-on -->
					        </li>
					         <li>
					          <img  src="bootstrap/images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELICIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="bootstrap/images/4.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					          
					          <!-- share-on -->
					        </li>
					        <li>
					          <img src="bootstrap/images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELICIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="bootstrap/images/1.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					   
					        </li>
					        <li>
					          <img src="bootstrap/images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					            <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELICIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="bootstrap/images/5.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					        </li>
					        <li>
					          <img src="bootstrap/images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					            <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELICIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="bootstrap/images/6.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
		<!-- /banner -->
		</div>
		<!-- top-grids -->
		<div class="top-grids">
			<div class="container">
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>OUR CAKES</h3>
					</div>
					<div class="top-grid-info">
						<img src="bootstrap/images/img1.jpg" class="img-responsive" title="name"/>
						
						<div class="clearfix"> </div>
						<div class="btn">{{HTML::link('/productsBuyer','View More', array('style' => 'color:white, hover: pink'))}}</div>
					</div>
				</div>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>OUR CAKES</h3>
					</div>
					<div class="top-grid-info">
						<img src="bootstrap/images/img2.jpg" class="img-responsive" title="name"/>
						
						<div class="clearfix"> </div>
						<div class="btn">{{HTML::link('/productsBuyer','View More', array('style' => 'color:white, hover: pink'))}}</div>
					</div>
				</div>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>OUR CAKES</h3>
					</div>
					<div class="top-grid-info">
						<img src="bootstrap/images/img3.jpg" class="img-responsive" title="name"/>
						
						<div class="clearfix"> </div>
						<div class="btn">{{HTML::link('/productsBuyer','View More', array('style' => 'color:white, hover: pink'))}}</div>
					</div>
				</div>
			</div>
			<!-- top-grids-bg -->
			<div class="top-grids-bg">
				<span> </span>
			</div>
			<!-- top-grids-bg -->
		</div>
		<!-- top-grids -->
		<!-- bottom-grids -->
		<div class="bottom-grids">
			<div class="container">
				<div class="col-md-8 bottom-grid-left">
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="bootstrap/images/pic2.jpg" title="name"/>
						<h4>kids birthday cake</h4>
						<p>$40</p>
					</div>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="bootstrap/images/pic1.jpg" title="name"/>
						<h4>kids birthday cake</h4>
						<p>$40</p>
					</div>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="bootstrap/images/pic3.jpg" title="name"/>
						<h4>kids birthday cake</h4>
						<p>$40</p>
					</div>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="bootstrap/images/pic4.jpg" title="name"/>
						<h4>kids birthday cake</h4>
						<p>$40</p>
					</div>
					<div class="clearfix"> </div>
					<span class="best-sale">Best sellers</span>
					<a href="#" class="order"> </a>
				</div>
				<div class="col-md-4 bottom-grid-right">
					<h3><span class="tweet"> </span> latest tweet</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
					<label>1 day ago</label>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- bottom-grids -->
	<!-- /container -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 location">
					<h4>location</h4>
					<p>#04 Dist.City,State,PK</p>
					<h4>hours</h4>
					<p>Weekdays 7 a.m.-7 p.m.</p>
					<p>Weekends 8 a.m.-7 p.m.</p>
					<p>Call for Holidays Hours.</p>
				</div>
				<div class="col-md-3 customer">
					<h4>customer service</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>
					<h4>phone</h4>
					<h6>1(234)567-8910</h6>
					<h4>contact us</h4>
					<h6>contact us page.</h6>
				</div>
				<div class="col-md-3 social">
					<h4>get social</h4>
					<div class="face-b">
						<img src="bootstrap/images/foot.png" title="name"/>
						<a href="#"><i class="fb"> </i></a>
					</div>
					<div class="twet">		
						<img src="bootstrap/images/foot.png" title="name"/>
							<a href="#"><i class="twt"> </i></a>
					</div>	
				</div>
				<div class="col-md-3 sign">
					<h4>sign up for news later</h4>	
						<form>
						<input type="text" class="text" value="YOUR EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ';}">
						</form>
				</div>
					<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>DEVELOPERS: CARULASAN, KIMBERLY JEAN && LAUDE, DAVID</p>
			</div>
		</div>
	</div>
	<!-- /footer -->
	</body>
</html>

