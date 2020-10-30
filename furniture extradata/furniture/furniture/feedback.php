<?php

include("control.php");

//insert feedback
if(isset($_REQUEST['submit']))
{
	$fn = $_REQUEST['fname'];
	$em = $_REQUEST['email'];
	$mb = $_REQUEST['mno'];
	$pr = $_REQUEST['pname'];
	$ad = $_REQUEST['address'];
	$ms = $_REQUEST['msg'];
	
	$obj=new control();
	$i = $obj->ins($fn,$em,$mb,$pr,$ad,$ms);
	echo "<script>alert('Your Feedback is inserted')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Feedback|Retail Furniture</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>    
<script type="text/javascript" language="javascript">
function validate_frm()
{
	var fn=document.frm6.fname;
	var em=document.frm6.email;
	var mn=document.frm6.mno;
	var pn=document.frm6.pname;
	var ad=document.frm6.address;
	var ms=document.frm6.msg;
	
	if(fn.value=="")
	{
		alert("First Name field can not be empty");
		fn.focus();
		return false;
	}
	if(em.value=="")
	{
		alert("Email field can not be empty");
		em.focus();
		return false;
	}
	if(mn.value=="")
	{
		alert("Mobile Number field can not be empty");
		mn.focus();
		return false;
	}
	if(pn.value=="")
	{
		alert("Product Name field can not be empty");
		pn.focus();
		return false;
	}
	if(ad.value=="")
	{
		alert("Address field can not be empty");
		ad.focus();
		return false;
	}
	if(ms.value=="")
	{
		alert("Message field can not be empty");
		ms.focus();
		return false;
	}
}

function checkfname()
{
	var name=document.frm6.fname;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(name.value))
	{
		alert("User Name can not contain special characters");
		name.focus();
		return false;
	}
}

function checkEmail()
{
	var email=document.frm6.email;
	var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!filter.test(email.value))
	{
		alert("Please provide a valid email address");
		email.focus();
		return false;
	}
}

function checkmob()
{
	var mob=document.frm6.mno;
	var filter=/^[0-9]+$/;
	if(!filter.test(mob.value))
	{
		alert("Mobile Number can not contain special characters");
		mob.focus();
		return false;
	}
}

function checkpname()
{
	var name=document.frm6.pname;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(name.value))
	{
		alert("Product Name can not contain special characters");
		name.focus();
		return false;
	}
}

function checkadd()
{
	var address=document.frm6.address;
	var filter=/^[a-zA-Z0-9,-. ]+$/;
	if(!filter.test(address.value))
	{
		alert("Address can not contain special characters");
		address.focus();
		return false;
	}
}

function checkmsg()
{
	var msg=document.frm6.msg;
	var filter=/^[a-zA-Z0-9,-. ]+$/;
	if(!filter.test(msg.value))
	{
		alert("Message can not contain special characters");
		msg.focus();
		return false;
	}
}
</script> 
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
                                                	<h3 class="indent-bot3">User Feedback</h3>
                                                    <form method="post" name="frm6" onSubmit="return validate_frm();">
													<table>
														<tr>
															<td><b>Full Name</b></td>
															<td><input type="text" name="fname" size="50" maxlength="30" class="p2" onBlur="return checkfname();"></td>
														</tr>
														<tr>
															<td><b>Email ID</b></td>
															<td><input type="text" name="email" size="50" maxlength="50" class="p2" onBlur="return checkEmail();"></td>
														</tr>
														<tr>
															<td><b class="indent-right">Mobile Number</b></td>
															<td><input type="text" name="mno" size="50" maxlength="10" class="p2" onBlur="return checkmob();"></td>
														</tr>
														<tr>
															<td><b>Product Name</b></td>
															<td><input type="text" name="pname" size="50" maxlength="50" class="p2" onBlur="return checkpname();"></td>
														</tr>
														<tr>
															<td><b>Address</b></td>
															<td><textarea name="address" cols="40" rows="5" class="p2" onBlur="return checkadd();"></textarea></td>
														</tr>
														<tr>
															<td><b>Message</b></td>
															<td><textarea name="msg" cols="40" rows="5" class="p2" onBlur="return checkmsg();"></textarea></td>
														</tr>
														<tr>
															<div class="buttons"><th colspan="2"><input type="submit" name="submit" value="Send" class="button">  <input type="reset" name="clear" value="Clear" class="button"></th></div>
														</tr>
													</table>
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