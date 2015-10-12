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
		<script src="bootstrap/js/jquery.min.js"></script>
		<script type="bootstrap/text/javascript" src="js/move-top.js"></script>
		<script type="bootstrap/text/javascript" src="js/easing.js"></script>
		<link rel="stylesheet" href="bootstrap/css/etalage.css">
		<link href="bootstrap/css/form.css" rel="stylesheet" type="text/css" media="all" />
		<script src="bootstrap/js/jquery.easydropdown.js"></script>
		<script src="bootstrap/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
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
                                    {{$name=$users['name'];}}
                                @endforeach
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
					<li>{{HTML::link('/homeBuyer','Home', array('style' => 'color:white, hover: pink'))}}</li>
					<li  class="active">{{HTML::link('/products','Products', array('style' => 'color:white, hover: pink'))}}</li>
					<li>{{HTML::link('/aboutBuyer','About', array('style' => 'color:white, hover: pink'))}}</li>
					<li>{{HTML::link('/contact','Contact', array('style' => 'color:white, hover: pink'))}}</li>
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
	<!---start-content -->
	<div class="details">
<div class="container">
<div class="row single">
<div class="col-md-9">
				  <div class="single_left">
				 
					<div class="grid images_3_of_2">
						
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="bootstrap/images/m1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="bootstrap/images/m1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="bootstrap/images/m2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="bootstrap/images/m2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="bootstrap/images/m3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="bootstrap/images/m3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="bootstrap/images/m4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="bootstrap/images/m4.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div>
				  <div class="desc1 span_3_of_2">
					<h3>Special Cake -Chocolate Truffle</h3>
					<p>Rs. 999 <a href="#">click for offer</a></p>
					<div class="det_nav">
						<h4>related cakes :</h4>
						<ul>
							<li><a href="#"><img src="bootstrap/images/11.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="bootstrap/images/12.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="bootstrap/images/13.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="bootstrap/images/14.jpg" class="img-responsive" alt=""/></a></li>
						</ul>
					</div>
					
					<div class="btn_form">
						<a href="#">buy</a>
					</div>
					
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Details</h6>
					<p class="prod-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option</p>
				</div>
				
	       </div>   
				<div class="clearfix"></div>	
	</div>
	</div>
	</div>
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

