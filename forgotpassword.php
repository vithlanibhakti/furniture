<?php
error_reporting(0);

include("control.php");

if(isset($_REQUEST['submit']))
{
	$em = $_REQUEST['email'];
	$se = $_REQUEST['sec'];
	$ans = $_REQUEST['ans'];
	
	$obj=new control();
	$self = $obj->selef($em,$se,$ans);
	$r=mysql_fetch_array($self);
	if(mysql_num_rows($self)>0)
	{
		header("location:newpass.php?pass_id=".$r['user_id']);
	}
	else
	{
		echo "<script>alert('Email ID and/or other details does not match');</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password|Retail Furniture</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>   
	
<script type="text/javascript" language="javascript">
function validate_for()
{
	var em=document.frm3.email;
	var sq=document.frm3.sec;
	var an=document.frm3.ans;
	
	if(em.value=="")
	{
		alert("Email Address field can not be empty");
		em.focus();
		return false;
	}
	if(sq.value=="")
	{
		alert("Please select security question");
		sq.focus();
		return false;
	}
	if(an.value=="")
	{
		alert("Answer field can not be empty");
		an.focus();
		return false;
	}
}
function checkEmail()
{
	var email=document.frm3.email;
	var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!filter.test(email.value))
	{
		alert("Please provide a valid email address");
		email.focus();
		return false;
	}
}
function checkans()
{
	var ans=document.frm3.ans;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(ans.value))
	{
		alert("Answer can not contain special characters");
		ans.focus();
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
                                                                <li class="text-1">Fill All details to get your new password.</li>																
															</ul>

<form method="post" name="frm3" onsubmit="return validate_for();">
 <fieldset>
<table align="center" border="5" bordercolor="#FF0000">
	<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<td><label class="p2"><b>Email ID:</b></label></td>
		<td><input type="text" name="email" size="50" value="<?php echo $r['email']; ?>" onblur="return checkEmail();"/></td>
	</tr>
	<tr>
		<td><label class="p2"><b>Security Question:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label></td>
		<td><select name="sec">
		<option value="<?php echo $r['que']; ?>">Select Your Question</option>
		<option value="color">Your favorite color?</option>
		<option value="pet">Your pet name?</option>
		<option value="school">Your favorite school teacher?</option>
		<option value="game">Your favorite game?</option>
		<option value="subject">Your favorite subject?</option>
		</select>
		</td>
	</tr>
	<tr>
		<td><label class="p2"><b>Answer:</b></label></td>
		<td><input type="text" name="ans" size="30" value="<?php echo $r['answer']; ?>" onblur="return checkans();"/></td>
	</tr>
	<tr>
		<div class="buttons"><th colspan="2"><input type="submit" name="submit" value="Submit" class="button"/>
		<input type="reset" name="reset" value="Clear" class="button"/></th></div>
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