<?php

error_reporting(0);
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
	
//fetch profile details
if(isset($_REQUEST['edit_id']))
{
	$e = $_REQUEST['edit_id'];
	$obj=new control();
	$fp = $obj->spr($e);
	$r=mysql_fetch_array($fp);
}

//update profile details
if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
{
	$e = $_REQUEST['edit_id'];
	$un = $_REQUEST['uname'];
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
	$upp = $obj->uprof($e,$un,$fn,$ln,$em,$se,$an,$gn,$ho,$mo,$ad,$co,$st,$ci);
	header("location:profile.php");
}

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

function c(str)
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
		
		var strurl = "getdata1.php?category="+str;
		
		abc.open('GET',strurl,true);
		abc.send();
		
		abc.onreadystatechange = function()
		{
			if(abc.readyState == 4)
			{
				document.getElementById('subcat').innerHTML = abc.responseText;
			}
		}
		
}

function d(str)
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
		
		var strurl = "getdata1.php?subcat="+str;
		
		abc.open('GET',strurl,true);
		abc.send();
		
		abc.onreadystatechange = function()
		{
			if(abc.readyState == 4)
			{
				document.getElementById('product').innerHTML = abc.responseText;
			}
		}
		
}

function validate_frm()
{
	var cn=document.frm5.cname;
	var em=document.frm5.email;
	var mo=document.frm5.mobno;
	var ca=document.frm5.category;
	var su=document.frm5.subcat;
	var pr=document.frm5.product;
	var qu=document.frm5.qua;
	var ad=document.frm5.address;
	var co=document.frm5.country;
	var st=document.frm5.state;
	var ci=document.frm5.city;
	var ms=document.frm5.msg;
	var da=document.frm5.date;
	
	if(cn.value=="")
	{
		alert("Customer Name field can not be empty");
		cn.focus();
		return false;
	}
	if(em.value=="")
	{
		alert("Email field can not be empty");
		em.focus();
		return false;
	}
	if(mo.value=="")
	{
		alert("Mobile field can not be empty");
		mo.focus();
		return false;
	}
	if(ca.value=="")
	{
		alert("Please select Category");
		ca.focus();
		return false;
	}
	if(su.value=="")
	{
		alert("Please select Sub Category");
		su.focus();
		return false;
	}
	if(pr.value=="")
	{
		alert("Please select Product");
		pr.focus();
		return false;
	}
	if(qu.value=="")
	{
		alert("Quantity can not be empty");
		qu.focus();
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
		alert("Please select Country");
		co.focus();
		return false;
	}
	if(st.value=="")
	{
		alert("Please select State");
		st.focus();
		return false;
	}
	if(ci.value=="")
	{
		alert("Please select City");
		ci.focus();
		return false;
	}
	if(ms.value=="")
	{
		alert("Message field can not be empty");
		ms.focus();
		return false;
	}
	if(da.value=="")
	{
		alert("Date field can not be empty");
		da.focus();
		return false;
	}
}

function checkcname()
{
	var name=document.frm5.cname;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(name.value))
	{
		alert("Customer Name can not contain special characters");
		name.focus();
		return false;
	}
}

function checkEmail()
{
	var email=document.frm5.email;
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
	var mob=document.frm5.mobno;
	var filter=/^[0-9]+$/;
	if(!filter.test(mob.value))
	{
		alert("Mobile Number can not contain special characters");
		mob.focus();
		return false;
	}
}

function checkqua()
{
	var qua=document.frm5.qua;
	var filter=/^[0-9]+$/;
	if(!filter.test(qua.value))
	{
		alert("Quantity can not contain special characters");
		qua.focus();
		return false;
	}
}

function checkadd()
{
	var add=document.frm5.address;
	var filter=/^[a-zA-Z0-9,-. ]+$/;
	if(!filter.test(add.value))
	{
		alert("Address can not contain special characters");
		add.focus();
		return false;
	}
}

function checkmsg()
{
	var msg=document.frm5.msg;
	var filter=/^[a-zA-Z0-9,-. ]+$/;
	if(!filter.test(msg.value))
	{
		alert("Message can not contain special characters");
		msg.focus();
		return false;
	}
}

function checkdate()
{
	var date=document.frm5.date;
	var filter=/^[0-9,-]+$/;
	if(!filter.test(date.value))
	{
		alert("Date can not contain special characters");
		date.focus();
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
															
														<form method="post" name="frm5" onSubmit="return validate_frm();">                    
                                                        <fieldset>
															<table border="0" cellpadding="5" cellspacing="5"  class="p2">
															
															<tr>
															<td><label class="p2"><b>User Name:</b></label></td>
															<td><input type="text" name="uname" size="20" maxlength="20" onBlur="return checkuname();" value="<?php echo $r['username']; ?>"></td>
															</tr>
															 
															<?php
															if(isset($_REQUEST['edit_id']))
															{
															}
															else
															{
															?> 
															<tr>
															<td><label class="p2"><b>Password:</b></label></td>
															<td><input type="password" name="password" size="20" maxlength="20" onBlur="return checkpass();"></td>
															</tr>
															<?php
															}
															?>
															
															<tr>
															<td><label class="p2"><b>First Name:</b></label></td>
															<td><input type="text" name="fname" size="20" maxlength="20" onBlur="return checkfname();" value="<?php echo $r['f_name']; ?>"></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Last Name:</b></label></td>
															<td><input type="text" name="lname" size="20" maxlength="20" onBlur="return checklname();" value="<?php echo $r['l_name']; ?>"></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Email ID:</b></label></td>
															<td><input type="text" name="email" size="50" maxlength="50" onBlur="return checkEmail();" value="<?php echo $r['email']; ?>"></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Security Question:</b></label></td>
															<td><select name="sec">
															<?php
																if(isset($_REQUEST['edit_id']))
																{
																	$e = $_REQUEST['edit_id'];
																	$obj=new control();
																	$selec = $obj->selsec($e);
																	while($rsec = mysql_fetch_array($selec))
																	{
															?>
															<option value="<?php echo $rsec['user_id']; ?>"><?php echo $rsec['sec']; ?></option>
															<?php
																	}
																}
															?>				
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
															<td><input type="text" name="ans" size="30" onBlur="return checkans();" value="<?php echo $r['ans']; ?>"/></td>
															</tr>															
															
															<tr>
															<td><label class="p2"><b>Gender:</b></label></td>
															<td><input type="radio" name="gender" value="Male"
															<?php
															$val=$r['gender'];
															if($val=='Male')
															{
															?>
															checked="checked"
															<?php
															}
															?>
															>Male
																<input type="radio" name="gender" value="Female"
															<?php
															$val=$r['gender'];
															if($val=='Female')
															{
															?>
															checked="checked"
															<?php
															}
															?>	
																>Female</td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Hobby:</b></label></td>
															<?php
															$h = $r['hobby'];
															$ho = explode(',',$h);
															?>
															<td><input type="checkbox" name="hob[]" value="Reading"
															<?php
															if($ho[0]=='Reading')
															{
															?>
															checked="checked"
															<?php
															}
															?>
															/>Reading
																<input type="checkbox" name="hob[]" value="Writing"
															<?php
															if($ho[0]=='Writing' || $ho[1]=='Writing')
															{
															?>
															checked="checked"
															<?php
															}
															?>
																/>Writing
																<input type="checkbox" name="hob[]" value="Dancing"
															<?php
															if($ho[0]=='Dancing' || $ho[1]=='Dancing' || $ho[2]=='Dancing')
															{
															?>
															checked="checked"
															<?php
															}
															?>
																/>Dancing
																<input type="checkbox" name="hob[]" value="Singing"
															<?php
															if($ho[0]=='Singing' || $ho[1]=='Singing' || $ho[2]=='Singing' || $ho[3]=='Singing')
															{
															?>
															checked="checked"
															<?php
															}
															?>	
																/>Singing
																<input type="checkbox" name="hob[]" value="News"
															<?php
															if($ho[0]=='News' || $ho[1]=='News' || $ho[2]=='News' || $ho[3]=='News' || $ho[4]=='News')
															{
															?>
															checked="checked"
															<?php
															}
															?>	
																/>News
																<input type="checkbox" name="hob[]" value="Watch TV"
															<?php
															if($ho[0]=='Watch TV' || $ho[1]=='Watch TV' || $ho[2]=='Watch TV' || $ho[3]=='Watch TV' || $ho[4]=='Watch TV' || $ho[5]=='Watch TV')
															{
															?>
															checked="checked"
															<?php
															}
															?>		
																/>Watch TV
																<input type="checkbox" name="hob[]" value="Internet"
															<?php
															if($ho[0]=='Internet' || $ho[1]=='Internet' || $ho[2]=='Internet' || $ho[3]=='Internet' || $ho[4]=='Internet' || $ho[5]=='Internet' || $ho[6]=='Internet')
															{
															?>
															checked="checked"
															<?php
															}
															?>		
																/>Internet</td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Mobile No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label></td>
															<td><input type="text" name="mobno" size="20" maxlength="10" onBlur="return checkmob();" value="<?php echo $r['mobile_no']; ?>"></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label></td>
															<td><textarea rows="4" cols="50" name="address" onBlur="return checkadd();"><?php echo $r['address']; ?></textarea></td>
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
																if($rw['cid']==$r['country'])
																{															
															?>
															<option value="<?php echo $rw['cid']; ?>" selected="selected"><?php echo $rw['cname']; ?></option>
															<?php
																}
																else
																{
															?>
															<option value="<?php echo $rw['cid']; ?>"><?php echo $rw['cname']; ?></option>
															<?php																
																}
															}
															?>
															</select></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>State:</b></label></td>
															<td><select name="state" id="state" onChange="b(this.value)">
															<option value="">Select</option>	
															<?php
																if(isset($_REQUEST['edit_id']))
																{
																	$obj=new control();
																	$sel_st = $obj->sel_st();
																	while($r_st = mysql_fetch_array($sel_st))
																	{
																		if($r_st['sid'] == $r['state'])
																		{
															?>
															<option value="<?php echo $r_st['sid']; ?>" selected="selected"><?php echo $r_st['sname']; ?></option>
															<?php
																		}
																		else
																		{
															?>
															<option value="<?php echo $r_st['sid']; ?>"><?php echo $r_st['sname']; ?></option>
															<?php
																		}
																	}
																}
															?>														
															</select></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>City:</b></label></td>
															<td><select name="city" id="city">
															<option value="">Select</option>	
															<?php
																if(isset($_REQUEST['edit_id']))
																{
																	$obj=new control();
																	$sel_ct = $obj->sel_ct();
																	while($r_ct = mysql_fetch_array($sel_ct))
																	{
																		if($r_ct['ctid'] == $r['city'])
																		{
															?>
															<option value="<?php echo $r_ct['ctid']; ?>" selected="selected"><?php echo $r_ct['ctname']; ?></option>
															<?php
																		}
																		else
																		{
															?>
															<option value="<?php echo $r_ct['ctid']; ?>"><?php echo $r_ct['ctname']; ?></option>
															<?php
																		}
																	}
																}
															?>															
															</select></td>
															</tr>
															<tr>
															<?php
															if(isset($_REQUEST['edit_id']))
															{
															?>
																<div class="buttons"><th colspan="2"><input type="submit" name="update" value="Update" class="button">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="clear" value="Clear" class="button"></th></div>
															<?php
															}
															else
															{
															?>
															<div class="buttons"><th colspan="2"><input type="submit" name="submit" value="Submit" class="button">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="clear" value="Clear" class="button"></th></div>
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