<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category Products|Retail Furniture</title>
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
                                                            <h3 class="prev-indent-bot2">Category</h3>
                                                            <ul class="list-2">
															<?php
															include("conn.php");
															$sql = "select * from category";
															$result = mysql_query($sql);
															while($r=mysql_fetch_array($result))
															{
															?>
																<li class="text-1"><a href="products2.php?c_id=<?php echo $r['cat_id']; ?>"><?php echo $r['cat_name']; ?></a></li>
															<?php
															}
															?>	
                                                            </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                            <h3 class="p2">Products Details</h3>
                                                            <div class="wrapper prev-indent-bot2">
                                                               <div class="extra-wrap">
															   <ul>
													<?php
													
													if(isset($_REQUEST['search']))
													{
														$pr = $_REQUEST['pro'];
														$sql = "select subcat.*,product.* from product join subcat on product.sub_id=subcat.sub_id where pro_name like '%$pr%'";
														$res = mysql_query($sql);
								
														while($rr=mysql_fetch_array($res))
														{
													?>
													 
         <li><div style="float:left; padding-right:80px;"><a href="products4.php?p_id=<?php echo $rr['pro_id']; ?>"><?php echo $rr['pro_name']; ?><br><img src="admin/photo/<?php echo $rr['pro_img']; ?>" height="100px" width="150px" /><br></a></div></li>
		
		
		
													<?php
													}
													}
													?>	
                                                   </ul>
				   </div></div></div>
                                                                 
														
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
