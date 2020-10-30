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
	
//fetch
$obj=new control();
$fp = $obj->fpro($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile|Retail Furniture</title>
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
                                                            <h3 class="prev-indent-bot2">Your Profile</h3>
                                                            <ul class="list-2">
                                                                <li class="text-1"><a href="userhome.php">User Order Page</a></li>
																<li class="text-1"><a href="vieword.php">View Your Order</a></li>	
																<li class="text-1"><a href="profile.php">View Your Profile</a></li>																	
                                                             </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                             <h3 class="p2">Profile Details</h3>
                                                            <div class="wrapper prev-indent-bot2">
															<ul class="list-2">
                                                                <li class="text-1">Welcome, <?php echo $nm; ?></li>																
															</ul>
														<form method="post" name="frm6">                    
                                                        <fieldset>
															<table border="0" cellpadding="5" cellspacing="5"  class="p2">
															<?php
															while($r=mysql_fetch_array($fp))
															{
															?>
															<tr>
															<td><label class="p2"><b>User Name:</b></label></td>
															<td><?php echo $r['username']; ?></td>
															</tr>
																														
															<tr>
															<td><label class="p2"><b>First Name:</b></label></td>
															<td><?php echo $r['f_name']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Last Name:</b></label></td>
															<td><?php echo $r['l_name']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Email ID:</b></label></td>
															<td><?php echo $r['email']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Security Question:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label></td>
															<td><?php echo $r['sec']; ?></td>
															</tr>
															<tr>
															<td><label class="p2"><b>Answer:</b></label></td>
															<td><?php echo $r['ans']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Gender:</b></label></td>
															<td><?php echo $r['gender']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Hobby:</b></label></td>
															<td><?php echo $r['hobby']; ?></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Mobile No:</b></label></td>
															<td><?php echo $r['mobile_no']; ?></td>
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
																<th align="center" colspan="3"><a href="profileedit.php?edit_id=<?php echo $r['user_id']; ?>">Edit Profile</a></th>
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