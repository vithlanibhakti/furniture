<?php
error_reporting(0);

$id = $_REQUEST['pass_id'];
include("control.php");

if(isset($_REQUEST['submit']))
{
	$ps1 = $_REQUEST['pass1'];
	
	$obj=new control();
	$up = $obj->upda($ps1,$id);
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Password|Retail Furniture</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>   
	
<script type="text/javascript" language="javascript">
function validate_formm()
{
	var ps1=document.frm4.pass1;
	var ps2=document.frm4.pass2;
	if(ps1.value=="")
	{
		alert("Password field can not be empty");
		ps1.focus();
		return false;
	}
	if(ps2.value=="")
	{
		alert("Re-Password field can not be empty");
		ps2.focus();
		return false;
	}
}

function checkpass1()
{
	var pass1=document.frm4.pass1;
	var filter=/^[a-zA-Z0-9]+$/;
	if(!filter.test(pass1.value))
	{
		alert("Password can not contain special characters");
		pass1.focus();
		return false;
	}
}

function checkpass2()
{
	var pass2=document.frm4.pass2;
	var filter=/^[a-zA-Z0-9]+$/;
	if(!filter.test(pass2.value))
	{
		alert("Re-Password can not contain special characters");
		pass2.focus();
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
                            <div class="box p3">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                                <div class="wrapper">
                                                    <article class="grid_4 alpha">
                                                        <div class="indent">
                                                            <h3 class="prev-indent-bot2">Login</h3>
                                                            <ul class="list-2">
                                                                <li class="text-1"><a href="login.php">Login Page</a></li>
																<li class="text-1"><a href="signup.php">Registration Page</a></li>
                                                             </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                             <h3 class="p2">Forgot Password</h3>
                                                            <div class="wrapper prev-indent-bot2">
															<ul class="list-2">
                                                                <li class="text-1">Fill new password.</li>																
															</ul>
															<form method="post" name="frm4" onsubmit="return validate_formm();">
															 <fieldset>
<table align="center" border="5" bordercolor="#FF0000">
	<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<td><label class="p2"><b>Enter Password:</b></label></td>
		<td><input type="password" name="pass1" size="30" onblur="return checkpass1();"/></td>
	</tr>
	<tr>
		<td><label class="p2"><b>Enter Re-Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label></td>
		<td><input type="password" name="pass2" size="30" onblur="return checkpass2();"/></td>
	</tr>
	<tr>
		<div class="buttons"><th colspan="2"><input type="submit" name="submit" value="Update" class="button"/><input type="reset" name="reset" value="Clear" class="button"/></th></div>
	</tr>
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