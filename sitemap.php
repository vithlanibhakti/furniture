<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sitemap|Retail Furniture</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>    
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
                            <div class="box">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="indent-bot3">Sitemap</h3>
													
													<?php

													$urls = array();  
													
													$DomDocument = new DOMDocument();
													$DomDocument->preserveWhiteSpace = false;
													$DomDocument->load('sitemap.xml');
													$DomNodeList = $DomDocument->getElementsByTagName('loc');
													
													foreach($DomNodeList as $url) {
														$urls[] = $url->nodeValue;
													}
													
													//display it
													
													foreach($urls as $values)
													{
														echo "<a href='$values'>".$values."</a><br><br>";
													}
													?>
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
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <?php
		include("footer.php");
	?>
</body>
</html>