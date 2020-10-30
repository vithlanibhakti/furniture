<?php

include("control.php");

//insert user signup
if(isset($_REQUEST['submit']))
{
	$un = $_REQUEST['uname'];
	$ps = $_REQUEST['password'];
	$fn = $_REQUEST['fname'];
	$ln = $_REQUEST['lname'];
	$em = $_REQUEST['email'];
	$se = $_REQUEST['sec'];
	$an = $_REQUEST['ans'];
	$gn = $_REQUEST['gender'];
	$h = $_REQUEST['hob'];
	$ho = implode(",",$h);
	$mo = $_REQUEST['mobno'];
	$ad = $_REQUEST['address'];
	$co = $_REQUEST['country'];
	$st = $_REQUEST['state'];
	$ci = $_REQUEST['city'];
	
	$obj=new control();
	$i = $obj->inu($un,$ps,$fn,$ln,$em,$se,$an,$gn,$ho,$mo,$ad,$co,$st,$ci);
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up|Retail Furniture</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>   
	
<script type="text/javascript" language="javascript">
function a(str)
{
		var abc;
		if(window.XMLHttpRequest)
		{
			abc= new XMLHttpRequest();
		}
		else
		{
			abc = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		var strurl = "getdata.php?country="+str;
		
		abc.open('GET',strurl,true);
		abc.send();
		
		abc.onreadystatechange = function()
		{
			if(abc.readyState == 4)
			{
				document.getElementById('state').innerHTML = abc.responseText;
			}
		}
		
}

function b(str)
{
		var abc;
		if(window.XMLHttpRequest)
		{
			abc= new XMLHttpRequest();
		}
		else
		{
			abc = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		var strurl = "getdata.php?state="+str;
		
		abc.open('GET',strurl,true);
		abc.send();
		
		abc.onreadystatechange = function()
		{
			if(abc.readyState == 4)
			{
				document.getElementById('city').innerHTML = abc.responseText;
			}
		}
		
}

function validate_frm()
{
	var un=document.frm1.uname;
	var ps=document.frm1.password;
	var fn=document.frm1.fname;
	var ln=document.frm1.lname;
	var em=document.frm1.email;
	var sq=document.frm1.sec;
	var an=document.frm1.ans;
	var mo=document.frm1.mobno;
	var ad=document.frm1.address;
	var co=document.frm1.country;
	var st=document.frm1.state;
	var ci=document.frm1.city;
	
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
	if(fn.value=="")
	{
		alert("First Name field can not be empty");
		fn.focus();
		return false;
	}
	if(ln.value=="")
	{
		alert("Last Name field can not be empty");
		ln.focus();
		return false;
	}
	if(em.value=="")
	{
		alert("Email field can not be empty");
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
	
	if ( (document.frm1.gender[0].checked == false) && (document.frm1.gender[1].checked == false) ) 
	{
		alert ( "Please choose your Gender: Male or Female" ); 
		return false;
	}

	if(mo.value=="")
	{
		alert("Mobile field can not be empty");
		mo.focus();
		return false;
	}
	if(ad.value=="")
	{
		alert("Address field can not be empty");
		ad.focus();
		return false;
	}
	if(co.value=="")
	{
		alert("Please select Country field");
		co.focus();
		return false;
	}
	if(st.value=="")
	{
		alert("Please select State field");
		st.focus();
		return false;
	}
	if(ci.value=="")
	{
		alert("Please select City field");
		ci.focus();
		return false;
	}
}

function checkuname()
{
	var name=document.frm1.uname;
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
	var pass=document.frm1.password;
	var filter=/^[a-zA-Z0-9]+$/;
	if(!filter.test(pass.value))
	{
		alert("Password can not contain special characters");
		pass.focus();
		return false;
	}
}

function checkfname()
{
	var name=document.frm1.fname;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(name.value))
	{
		alert("First Name can not contain special characters");
		name.focus();
		return false;
	}
}

function checklname()
{
	var name=document.frm1.lname;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(name.value))
	{
		alert("Last Name can not contain special characters");
		name.focus();
		return false;
	}
}

function checkEmail()
{
	var email=document.frm1.email;
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
	var ans=document.frm1.ans;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(ans.value))
	{
		alert("Answer can not contain special characters");
		ans.focus();
		return false;
	}
}

function checkmob()
{
	var mob=document.frm1.mobno;
	var filter=/^[0-9]+$/;
	if(!filter.test(mob.value))
	{
		alert("Mobile Number can not contain special characters");
		mob.focus();
		return false;
	}
}

function checkadd()
{
	var address=document.frm1.address;
	var filter=/^[a-zA-Z0-9,-. ]+$/;
	if(!filter.test(address.value))
	{
		alert("Address can not contain special characters");
		address.focus();
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
                                                             <h3 class="p2">Sign Up to Your Account</h3>
                                                            <div class="wrapper prev-indent-bot2">
															<ul class="list-2">
                                                                <li class="text-1">Fill All details below to access your account. </li>
																<h3 class="p2">Sign Up</h3>
															</ul>
                                                    <form method="post" name="frm1" onSubmit="return validate_frm();">                    
                                                        <fieldset>
															<table border="0" cellpadding="5" cellspacing="5"  class="p2">
															<tr>
															<td><label class="p2"><b>User Name:</b></label></td>
															<td><input type="text" name="uname" size="20" maxlength="20" onBlur="return checkuname();"></td>
															</tr>
															 
															<tr>
															<td><label class="p2"><b>Password:</b></label></td>
															<td><input type="password" name="password" size="20" maxlength="20" onBlur="return checkpass();"></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>First Name:</b></label></td>
															<td><input type="text" name="fname" size="20" maxlength="20" onBlur="return checkfname();"></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Last Name:</b></label></td>
															<td><input type="text" name="lname" size="20" maxlength="20" onBlur="return checklname();"></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Email ID:</b></label></td>
															<td><input type="text" name="email" size="50" maxlength="50" onBlur="return checkEmail();"></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Security Question:</b></label></td>
															<td><select name="sec">
															<option value="">Select Your Question</option>
															<option value="Your favorite color?">Your favorite color?</option>
															<option value="Your pet name?">Your pet name?</option>
															<option value="Your favorite school teacher?">Your favorite school teacher?</option>
															<option value="Your favorite game?">Your favorite game?</option>
															<option value="Your favorite subject?">Your favorite subject?</option>
															</select>
															</td>
															</tr>
															<tr>
															<td><label class="p2"><b>Answer:</b></label></td>
															<td><input type="text" name="ans" size="30" onBlur="return checkans();"/></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Gender:</b></label></td>
															<td><input type="radio" name="gender" value="Male">Male
																<input type="radio" name="gender" value="Female">Female</td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Hobby:</b></label></td>
															<td><input type="checkbox" name="hob[]" value="Reading">Reading
																<input type="checkbox" name="hob[]" value="Writing">Writing
																<input type="checkbox" name="hob[]" value="Dancing">Dancing
																<input type="checkbox" name="hob[]" value="Singing">Singing
																<input type="checkbox" name="hob[]" value="News">News
																<input type="checkbox" name="hob[]" value="Watch TV">Watch TV
																<input type="checkbox" name="hob[]" value="Internet">Internet</td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Mobile No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label></td>
															<td><input type="text" name="mobno" size="20" maxlength="10" onBlur="return checkmob();"></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label></td>
															<td><textarea rows="4" cols="50" name="address" onBlur="return checkadd();"></textarea></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Country:</b></label></td>
															<td><select name="country" id="country" onChange="a(this.value)">
															<?php
															$obj=new control();
															$se = $obj->selco();
															?>
															<option value="">Select</option>
															<?php
															while($rw = mysql_fetch_array($se))
															{																
															?>
															<option value="<?php echo $rw['cid']; ?>"><?php echo $rw['cname']; ?></option>
															<?php																
															}
															?>
															</select></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>State:</b></label></td>
															<td><select name="state" id="state" onChange="b(this.value)">
															<option value="">Select</option>															
															</select></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>City:</b></label></td>
															<td><select name="city" id="city">
															<option value="">Select</option>																
															</select></td>
															</tr>
															<tr>
																<div class="buttons"><th colspan="2"><input type="submit" name="submit" value="Submit" class="button">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="clear" value="Clear" class="button"></th></div>
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