<?php
	mysql_connect("localhost","root","");
	mysql_select_db("briillientfurniture");
	
	
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE php>
<php>
<head>
<title>The Love & Fight Website Template | Services :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!--start manu -->
<link href="css/flexy-menu.css" rel="stylesheet">
<script type="text/javascript" src="js/flexy-menu.js"></script>
<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
</head>
<body>
<!-- start sb-search -->
<div id="sb-search" class="sb-search">
	<form>
		<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
		<input class="sb-search-submit" type="submit" value="">
		<span class="sb-icon-search"></span>
	</form>
</div>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script>
		new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!-- start header -->
<div class="header">
<div class="wrap">
	<div class="logo">
		<a href="index.php"><img src="images/logo.jpg" alt="" /></a>
	</div>
	<div class="h_right">
				<h4>customer support 24/7: <span>+44 123 456 7891</span></h4>
		<!-- start nav-->
			<ul class="flexy-menu thick orange">
			<li>
				<a  href="index.php">
					 <span class="">Home</span>	
					 <i class="icon3"></i>
				</a>
			</li>
			<li>
				<a href="pages.php">
					 <span class="color">Pages</span>	
					 <i class="icon2_h"></i>
				</a>
				<ul>
					<li><a href="index.php">Lorem Ipsum</a></li>
					<li><a href="service.php">services</a>
						<ul>
							<li><a href="portfolio.php">Lorem Ipsum</a></li>
							<li><a href="blog.php">news</a>
								<ul>
									<li><a href="blog.php">Lorem Ipsum</a></li>
									<li><a href="blog.php">Lorem Ipsum</a></li>
									<li><a href="blog.php">Lorem Ipsum</a></li>
								</ul>
							</li>
							<li><a href="portfolio.php">portfolio</a></li>
						</ul>
					</li>
					<li><a href="blog.php">news</a></li>
					<li><a href="portfolio.php">portfolio</a></li>
				</ul>
			</li>
			<li>
				<a href="portfolio.php">
					 <span>Portfolio</span>	
					 <i class="icon2"></i>
				</a>
				<ul>
				<li><a href="portfolio.php">Portfolio 01</a></li>
				<li><a href="portfolio.php">Portfolio 02</a></li>
				<li><a href="portfolio.php">Portfolio 03</a>
					<ul>
						<li><a href="portfolio.php">Portfolio</a>
							<ul>
								<li><a href="portfolio.php">Portfolio 01</a></li>
								<li><a href="portfolio.php">Portfolio 02</a></li>
								<li><a href="portfolio.php">Portfolio 03</a></li>
								<li><a href="portfolio.php">Portfolio 04</a></li>
							</ul>
						</li>
						<li><a href="portfolio.php">portfolio</a></li>
					</ul>
				</li>
				<li><a href="portfolio.php">Portfolio 04</a></li>
			</ul>
			</li>
			<li>
				<a href="blog.php">
					 <span>Blog</span>	
					 <i class="icon3"></i>
				</a>
			</li>
			<li class="last">
				<a href="contact.php">
					 <span>Contact</span>	
					 <i class="icon3"></i>
				</a>
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
 <div class="service">
 	<!-- start main_content -->	
		<form method="post" action="contact-post.php">
					    	<div>
						    	<span><label>USERNAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
                            <div>
                            	<span><label>Order Item</label></span>
                                <span><select name="item">
                                	<option value="">Select Order Item</option>
                                 <?php
								 $sel ="select * from product_detail";
								 $ex = mysql_query($sel);
								 while($r=mysql_fetch_array($ex))
								 {
                                 ?>
                                 <option value="<?php echo $r['product_id']; ?>"><?php echo $r['product_name']; ?></option>
                                 <?php
								 }
								 ?>
                                </select></span>
                            </div>
						    <div>
						    	<span><label>Prise</label></span>
						    	<span><input name="prise" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Place Order" name="order"></span>
						  </div>
					    </form>
				    <div class="sidebar">	
		<h3 class="blog_top">recent views</h3>
		<div class="r_views">
			<p>"But I must explain to you how denouncing pleasure and praising pain was born and I will give you a complete account of the system Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
			<a href="details.php">more views</a>
			<div class="clear"></div>
		</div>
		<h3>catogories</h3>
		<ul class="s_nav">
			<li><a href="#"><span>deserts</span><label>10</label><div class="clear"></div></a></li> 
			<li><a href="#"><span>salad receipts</span><label>12</label><div class="clear"></div></a></li>
			<li><a href="#"><span>fruit shakes</span><label>20</label><div class="clear"></div></a></li>
			<li><a href="#"><span>wallness</span><label>11</label><div class="clear"></div></a></li>
			<li><a href="#"><span>deserts</span><label>10</label><div class="clear"></div></a></li> 
		</ul>
	</div>
	<div class="clear"></div>
	<!-- end main_content -->
</div>
</div>
</div>
<!-- start footer -->
<div class="footer">
<div class="wrap">
	<!-- start soc_icons -->
	<div class="soc_icons">
								
			<ul>
				<li><a class="icon_1" href="#"></a></li>
				<li><a class="icon_2" href="#"></a></li>
				<li><a class="icon_3" href="#"></a></li>
				<li><a class="icon_4" href="#"></a></li>
				<li><a class="icon_5" href="#"></a></li>
				<li><a class="icon_6" href="#"></a></li>
				<li><a class="icon_7" href="#"></a></li>
			</ul>	
	</div>
	<!-- DC Toggle 1 Start -->
	<link type="text/css" rel="stylesheet" href="css/tsc_accordion_toggle.css" />
	<script type="text/javascript" src="js/tsc_accordion_toggle.js"></script>
	<div class="tsc_toggle_container">  
	  <div class="tsc_toggle style1">
	    <div class="tsc_toggle_box">
	      <div class="gridis_of_4">
	        <div class="clear"></div>
          </div>
	    <!-- end grids_of_4 -->
	    </div>
	  </div>
	</div>
	<!-- DC Toggle 1 End -->
	<div class="clear"></div>
</div>
</div>
<!-- start footer -->
<div class="footer top">
<div class="wrap">
<div class="footer_main">
	<ul  class="f_nav1">
		<li><a class="arrow" href="index.php"><span>home</span></a></li>
		<li><a class="arrow" href="service.php"><span>services</span></a></li>
		<li><a class="arrow" href="portfolio.php"><span>portfolio</span></a></li>
		<li><a class="arrow" href="contact.php"><span>contact us</span></a></li>
	</ul>
	<div class="copy">
		<p class="link">© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</php>