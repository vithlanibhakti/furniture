<?php
session_start();
	include("control.php");
	
if(!isset($_SESSION['id']))
{
	if(isset($_REQUEST['login']))
	{	
		$un = $_REQUEST['uname'];
		$ps = $_REQUEST['password'];
		
		$obj=new control();
		$se = $obj->selus($un,$ps);
		
		if(mysql_num_rows($se)>0)
		{
			$r = mysql_fetch_array($se);
			if($r['status']=='Enabled')
			{
				$_SESSION['id']=$r['user_id'];
				$_SESSION['name']= $r['username'];
				$_SESSION['email']= $r['email'];
				header("location:userhome.php");		
			}
			else
			{
				echo "<script>alert('Sorry You Are Disabled')</script>";
			}	
		}
		else
		{
			echo "<script>alert('Invalide username or password')</script>";
		}
			
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login|Retail Furniture</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>     
<script type="text/javascript" language="javascript">
function validate_frm()
{
	var un=document.frm2.uname;
	var ps=document.frm2.password;
	
	if(un.value=="")
	{
		alert("User Name field can not be empty");
		un.focus();
		return false;
	}
	if(ps.value=="")
	{
		alert("Password field can not be empty");
		ps.focus();
		return false;
	}
}

function checkuname()
{
	var name=document.frm2.uname;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(name.value))
	{
		alert("User Name can not contain special characters");
		name.focus();
		return false;
	}
}

function checkpass()
{
	var pass=document.frm2.password;
	var filter=/^[a-zA-Z0-9]+$/;
	if(!filter.test(pass.value))
	{
		alert("Password can not contain special characters");
		pass.focus();
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
                                                             <h3 class="p2">Sign In to Your Account</h3>
                                                            <div class="wrapper prev-indent-bot2">
															<ul class="list-2">
                                                                <li class="text-1">Access your private account by filling in your username and password below. </li>
																<h3 class="p2">Sign In</h3>
															</ul>
                                                    <form method="post" name="frm2" onSubmit="return validate_frm();">                    
                                                        <fieldset>
															<table border="0" cellpadding="5" cellspacing="5"  class="p2">
															<tr>
															<td><label class="p2"><b>Enter User Name:</b></label></td>
															<td><input type="text" name="uname" size="20" maxlength="20" onBlur="return checkuname();"></td>
															</tr>
															 
															<tr>
															<td><label class="p2"><b>Enter Password:</b></label></td>
															<td><input type="password" name="password" size="20" maxlength="20" onBlur="return checkpass();"></td>
															</tr>
																												
															<tr>
																<div class="buttons"><th colspan="2"><input type="submit" name="login" value="Submit" class="button">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="clear" value="Clear" class="button"></th></div>
															</tr>
															</table>            
                                                        </fieldset>					
                                                    </form>
													
													<b><a href="forgotpassword.php">Forgot your password?</a> We'll email it to you.</b>
													<li class="text-1">Creating an account is fast and easy. Your account allows you to:</li><br>
													<b>Speed up the checkout process by saving shipping and billing information</b>
													<b>Simplify online order tracking</b>
													<li class="text-1">If you are not a member than register first</li><br>
													<li class="text-1">Create a New Account<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php">Click Here</a></b></li>
													
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
<?php
}
else
{
	echo "<script>alert('You are already logged on...');</script>";
	header("refresh:0; url='userhome.php'");
}
?>