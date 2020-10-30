<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSR Cerification|Retail Furniture</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>   

<link type="text/css" href="css/style2.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="js/sagallery.js"></script>
<script src="js/jquery.quicksand.js" type="text/javascript"></script>
<script src="js/jquery.easing.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />  
</head>
<body id="page2">
	<!--==============================header=================================-->
    <?php
		include("header.php");
	?>
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box p3">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                                <div class="wrapper">
                                                    <article class="grid_4 alpha">
                                                        <div class="indent">
                                                            <h3 class="prev-indent-bot2">CSR</h3>
                                                            <ul class="list-2">
																<li class="text-1"><a href="csr.php">Video</a></li>
                                                                <li class="text-1"><a href="certi.php">Certification</a></li>
                                                          </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                            <h3 class="p2">Certification</h3>
                                                            <div class="wrapper prev-indent-bot2">
                                                               <div class="extra-wrap">
															   <?php
															   include("control.php");
									include("db.php");
															  $obj=new control();
																$result = $obj->vcsr();
																while($r = mysqli_fetch_array($result))
																{
																
																?>
																<div style="float:left; padding-right:70px;" class="portfolio-area"><li class="portfolio-item2"> <span class="image-block"><a class="image-zoom" href="admin/csr/<?php echo $r['photo']; ?>" rel="prettyPhoto[gallery]" title="Perform"><img src="admin/csr/<?php echo $r['photo']; ?>" style="margin-top:15px; float:left; margin-bottom:20px;" title="Cerification" height="150px" width="100px"></a></span></li></div>
																 <?php
																 }
																 ?>
															   </div></div>
                                                                 
														
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>	
        </div>
        
    </section>
    
	<!--==============================footer=================================-->
    <?php
		include("footer.php");
	?>
</body>
</html>