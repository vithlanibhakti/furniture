<?php


session_start();
include("control.php");

if(!isset($_SESSION['id']))
{
	echo "<script>alert('You are not logged on...');</script>";
	header("refresh:0; url='login.php'");
}
else
{
	$id = $_SESSION['id'];
	$nm = $_SESSION['name'];
	$em = $_SESSION['email'];
//fetch
$obj=new control();
$fpo = $obj->ford($em);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Order|Retail Furniture</title>
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
                            <div class="box p3">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                                <div class="wrapper">
                                                    <article class="grid_4 alpha">
                                                        <div class="indent">
                                                            <h3 class="prev-indent-bot2">Your Order</h3>
                                                            <ul class="list-2">
                                                                <li class="text-1"><a href="userhome.php">User Order Page</a></li>
																<li class="text-1"><a href="vieword.php">View Your Order</a></li>	
																<li class="text-1"><a href="profile.php">View Your Profile</a></li>																		
                                                             </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                             <h3 class="p2">Order Details</h3>
                                                            <div class="wrapper prev-indent-bot2">
															<ul class="list-2">
                                                                <li class="text-1">Welcome, <?php echo $nm; ?></li>																
															</ul>
														<form method="post" name="frm7">                    
                                                        <fieldset>
															<table border="0" cellpadding="5" cellspacing="5"  class="p2">
															<?php															
															while($r=mysql_fetch_array($fpo))
															{
															?>
															<tr>
															<td width="161"><label class="p2"><b>Customer Name:</b></label></td>
															<td width="144"><?php echo $r['cust_name']; ?></td>
															</tr>
																														
															<tr>
															<td><label class="p2"><b>Email ID:</b></label></td>
															<td><?php echo $r['email']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Mobile No:</b></label></td>
															<td><?php echo $r['mobile']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Category:</b></label></td>
															<td><?php echo $r['cat_name']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Sub Category</b></label></td>
															<td><?php echo $r['sub_name']; ?></td>
															</tr>
															<tr>
															<td><label class="p2"><b>Product:</b></label></td>
															<td><?php echo $r['pro_name']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Quantity:</b></label></td>
															<td><?php echo $r['quantity']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Address:</b></label></td>
															<td><?php echo $r['address']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Country:</b></label></td>
															<td><?php echo $r['cname']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>State:</b></label></td>
															<td><?php echo $r['sname']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>City:</b></label></td>
															<td><?php echo $r['ctname']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Message:</b></label></td>
															<td><?php echo $r['message']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Order Date:</b></label></td>
															<td><?php echo $r['order_date']; ?><?php echo "<br><br><br><br>"; ?></td>
															</tr>															
															<?php			
															}															
															?>													
															</table>            
                                                        </fieldset>					
                                       				</form>
													</div></div></article>
													</div></div></div></div></div></div></div></div></div></div></div></section>
													
   
    
	<!--==============================footer=================================-->
    <?php
		include("footer.php");
	?>
</body>
</html>
<?php
}
?>