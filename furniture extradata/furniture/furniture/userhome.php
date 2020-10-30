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

//insert user order details	
if(isset($_REQUEST['submit']))
{
	$cn = $_REQUEST['cname'];
	$em = $_REQUEST['email'];
	$mo = $_REQUEST['mobno'];
	$ca = $_REQUEST['category'];
	$su = $_REQUEST['subcat'];
	$pr = $_REQUEST['product'];
	$qu = $_REQUEST['qua'];
	$ad = $_REQUEST['address'];
	$co = $_REQUEST['country'];
	$st = $_REQUEST['state'];
	$ci = $_REQUEST['city'];
	$ms = $_REQUEST['msg'];
	$da = $_REQUEST['date'];
	
	$obj=new control();
	$io = $obj->inor($cn,$em,$mo,$ca,$su,$pr,$qu,$ad,$co,$st,$ci,$ms,$da);
	echo "<script>alert('Your order is registered , we will delivered soon...')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Home|Retail Furniture</title>
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
                                                            <h3 class="prev-indent-bot2">User Order</h3>
                                                            <ul class="list-2">
                                                                <li class="text-1"><a href="userhome.php">User Order Page</a></li>
																<li class="text-1"><a href="vieword.php">View Your Order</a></li>	
																<li class="text-1"><a href="profile.php">View Your Profile</a></li>																	
                                                             </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                             <h3 class="p2">Fill Order Details</h3>
                                                            <div class="wrapper prev-indent-bot2">
															<ul class="list-2">
                                                                <li class="text-1">Welcome, <?php echo $nm; ?></li>																
															</ul>
														<form method="post" name="frm5" onSubmit="return validate_frm();">                    
                                                        <fieldset>
															<table border="0" cellpadding="5" cellspacing="5"  class="p2">
															<tr>
															<td><label class="p2"><b>Customer Name:</b></label></td>
															<td><input type="text" name="cname" size="50" maxlength="30" onBlur="return checkcname();"></td>
															</tr>	
															
															<tr>
															<td><label class="p2"><b>Email ID:</b></label></td>
															<td><input type="text" name="email" size="50" maxlength="50" onBlur="return checkEmail();"></td>
															</tr>	
															
															<tr>
															<td><label class="p2"><b>Mobile No:</b></label></td>
															<td><input type="text" name="mobno" size="50" maxlength="10" onBlur="return checkmob();"></td>
															</tr>												
															
															<tr>
															<td><label class="p2"><b>Category:</b></label></td>
															<td><select name="category" id="category" onChange="c(this.value)">
															<?php
															$obj=new control();
															$se = $obj->selca();
															?>
															<option value="">Select</option>
															<?php
															while($rww = mysql_fetch_array($se))
															{																
															?>
															<option value="<?php echo $rww['cat_id']; ?>"><?php echo $rww['cat_name']; ?></option>
															<?php																
															}
															?>
															</select>
															</td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Sub Category:</b></label></td>
															<td><select name="subcat" id="subcat" onChange="d(this.value)">
															<option value="">Select</option>
															</select>
															</td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Product:</b></label></td>
															<td><select name="product" id="product">
															<option value="">Select</option>
															</select>
															</td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Quantity:</b></label></td>
															<td><input type="text" name="qua" size="50" maxlength="5" onBlur="return checkqua();"/></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Address:</b></label></td>
															<td><textarea rows="4" cols="40" name="address" onBlur="return checkadd();"></textarea></td>
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
															
															<tr>
															<td><label class="p2"><b>Message:</b></label></td>
															<td><textarea rows="4" cols="40" name="msg" onBlur="return checkmsg();"></textarea></td>
															</tr>
															
															<tr>
															<td><label class="p2"><b>Order Date(DD-MM-YYYY):</b></label></td>
															<td><input type="text" name="date" size="50" maxlength="10" onBlur="return checkdate();"></td>
															</tr>
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
<?php
}
?>