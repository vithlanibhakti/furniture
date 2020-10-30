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
													
													if(isset($_REQUEST['p_id']))
													{
														$pr = $_REQUEST['p_id'];
														$sql = "select subcat.*,product.* from product join subcat on product.sub_id=subcat.sub_id where pro_id='$pr'";
														$res = mysql_query($sql);
								
														while($rr=mysql_fetch_array($res))
														{
													?>
													 <form method="post" name="product">
         <table width="807">	
		 
		<tr>
			<th height="45">Product Name</th>
			<td><?php echo $rr['pro_name']; ?></td>
		</tr>
		<tr>
			<th height="45">Product Price</th>
			<td><?php echo $rr['pro_price']; ?></td>
		</tr>
		<tr>
			<th height="44">Model Number</th>
			<td><?php echo $rr['model_no']; ?></td>
		</tr>
		<tr>
			<th height="38">Product Code</th>
			<td><?php echo $rr['pro_code']; ?></td>
		</tr>
		<tr>
			<th height="125">Product Image</th>
			<td class="grow"><img src="admin/photo/<?php echo $rr['pro_img']; ?>" height="200px" width="300px"></td>
		</tr>
		<tr>
			<th height="43">Product Description</th>
			<td><?php echo $rr['pro_desc']; ?></td>
		</tr>
		<tr>
			<th height="39">Product Color</th>
			<td><?php echo $rr['pro_color']; ?></td>
		</tr>
		<tr>
			<th height="41">Product Warranty</th>
			<td><?php echo $rr['pro_war']; ?></td>
		</tr>
		<tr>
			<th height="39">Product Quantity (Min. available)</th>
			<td><?php echo $rr['pro_quan']; ?></td>
		</tr>
		
		</tr>
				<tr>
			<th height="37" colspan="12" align="center"><a href="login.php">Order Product</a></th>
		</tr>
						
	</table>
	
         </form>
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
