<?php
	mysql_connect("localhost","root","");
	mysql_select_db("briillientfurniture");
	
	
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>    
	<!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
        </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/php5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page4">
	<!--==============================header=================================-->
    <header>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="services.php">PRODUCT</a></li>
                                <li><a href="catalogue.php">GALLERY</a></li>
                                <li><a class="active" href="pricing.php">ORDER</a></li>
                                <li><a href="contacts.php">CONTACT US</a></li>
								<li><a href="registration.php">register</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1>
                            <a class="logo" href="index.php">BRIL<strong>LI</strong>ANT</a>
                            <span>FURNITURE</span>
                        </h1>
                    </div>
                    <div class="grid_3">
                    	<form id="search-form" method="post" enctype="multipart/form-data">
                    	</form>
                     </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header><div class="ic">More Website Templates  @ TemplateMonster.com - August22nd 2011!</div>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper"></div>
                                        <h3 class="p2">Order Form :</h3>
                                                    <form id="contact-form" method="post" enctype="multipart/form-data">                    
                                                        <fieldset>
                                                              <label><span class="text-form">Name:</span><input name="p1" type="text" /></label>
                                                              
                                                              <label><span class="text-form">Product Name:</span><input name="p2" type="text" /></label> 
                                                                                                                            <span><div class="wrapper"><div class="text-form">Order Item :</div>
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
                            <br>
						    <div>
                                                                                                                                            </div><label><span class="text-form">Price:</span><input name="p2" type="text" /></label>     
                                                              <label><span class="text-form">Phone:</span><input name="p3" type="text" /></label>      
                                                              
                                                                                              </div>
                               
                        <div class="buttons">
              <a class="button" href="submit.htm" >Submit</a>
                                                           </fieldset>						
                                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="bg-bot">
        	<div class="main">
            	<div class="container_12"></div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
     <footer>
        <div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                	<div class="grid_4">
                    	<div><u><b>BRILLIANT FURNITURE</b></u><br><b> &copy; 2014 <a class="link color-3" href="#">Privacy Policy</a></div></b>
                        <!-- {%FOOTER_LINK} -->
                    </div>
                    <div class="grid_4">
                    	<span class="phone-numb"> <h5><a target="_blank "><u>CONTACT NO:</a></u></span>
                        <p>+08823456789</p>
                    </div>
                    
                    </div>
                    <div class="grid_4">
                    	<ul class="list-services">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</php>
