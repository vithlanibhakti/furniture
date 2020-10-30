<?php
session_start();
error_reporting(0);
	include("control.php");
	$nm = $_SESSION['name'];
	
//insert branch details
if(isset($_REQUEST['submit']))
{
	$bn = $_REQUEST['bname'];
	$ba = $_REQUEST['badd'];
	$co = $_REQUEST['country'];
	$st = $_REQUEST['state'];
	$ci = $_REQUEST['city'];
	$bi = $_REQUEST['binc'];
	$bm = $_REQUEST['bmob'];
	$bp = $_REQUEST['bpho'];
	$be = $_REQUEST['bemail'];
	$bf = $_REQUEST['bfax'];
	
	$obj=new control();
	$i = $obj->insb($bn,$ba,$co,$st,$ci,$bi,$bm,$bp,$be,$bf);
	header("location:viewbranch.php");
}

//fetch branch details
if(isset($_REQUEST['edit_id']))
{
	$e = $_REQUEST['edit_id'];
	$obj=new control();
	$sebrn = $obj->selbnc($e);
	$r=mysql_fetch_array($sebrn);
}

//update branch details
if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
{
	$e = $_REQUEST['edit_id'];
	$bn = $_REQUEST['bname'];
	$ba = $_REQUEST['badd'];
	$co = $_REQUEST['country'];
	$st = $_REQUEST['state'];
	$ci = $_REQUEST['city'];
	$bi = $_REQUEST['binc'];
	$bm = $_REQUEST['bmob'];
	$bp = $_REQUEST['bpho'];
	$be = $_REQUEST['bemail'];
	$bf = $_REQUEST['bfax'];
	
	$obj=new control();
	$upb = $obj->updbr($e,$bn,$ba,$co,$st,$ci,$bi,$bm,$bp,$be,$bf);
	header("location:viewbranch.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL | Manage Branch</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
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
	var bn=document.frm3.bname;
	var ba=document.frm3.badd;
	var co=document.frm3.country;
	var st=document.frm3.state;
	var ci=document.frm3.city;
	var bi=document.frm3.binc;
	var bm=document.frm3.bmob;
	var bp=document.frm3.bpho;
	var be=document.frm3.bemail;
	var bf=document.frm3.bfax;
	
	if(bn.value=="")
	{
		alert("Branch Name field can not be empty");
		bn.focus();
		return false;
	}
	if(ba.value=="")
	{
		alert("Branch Address field can not be empty");
		ba.focus();
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
	if(bi.value=="")
	{
		alert("Branch Incharge field can not be empty");
		bi.focus();
		return false;
	}
	if(bm.value=="")
	{
		alert("Branch Mobile field can not be empty");
		bm.focus();
		return false;
	}
	if(bp.value=="")
	{
		alert("Branch Phone field can not be empty");
		bp.focus();
		return false;
	}
	if(be.value=="")
	{
		alert("Branch Email field can not be empty");
		be.focus();
		return false;
	}
	if(bf.value=="")
	{
		alert("Branch FAX field can not be empty");
		bf.focus();
		return false;
	}
}

function checkbname()
{
	var name=document.frm3.bname;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(name.value))
	{
		alert("Branch Name can not contain special characters");
		name.focus();
		return false;
	}
}

function checkadd()
{
	var address=document.frm3.badd;
	var filter=/^[a-zA-Z0-9,.- ]+$/;
	if(!filter.test(address.value))
	{
		alert("Address can not contain special characters");
		address.focus();
		return false;
	}
}

function checkinc()
{
	var name=document.frm3.binc;
	var filter=/^[a-zA-Z. ]+$/;
	if(!filter.test(name.value))
	{
		alert("Incharge Name can not contain special characters");
		name.focus();
		return false;
	}
}

function checkmob()
{
	var mob=document.frm3.bmob;
	var filter=/^[0-9]+$/;
	if(!filter.test(mob.value))
	{
		alert("Mobile Number can not contain special characters");
		mob.focus();
		return false;
	}
}

function checkphone()
{
	var pho=document.frm3.bpho;
	var filter=/^[0-9- ]+$/;
	if(!filter.test(pho.value))
	{
		alert("Phone Number can not contain special characters");
		pho.focus();
		return false;
	}
}

function checkEmail()
{
	var email=document.frm3.bemail;
	var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!filter.test(email.value))
	{
		alert("Please provide a valid email address");
		email.focus();
		return false;
	}
}

function checkfax()
{
	var fax=document.frm3.bfax;
	var filter=/^[0-9- ]+$/;
	if(!filter.test(fax.value))
	{
		alert("FAX Number can not contain special characters");
		fax.focus();
		return false;
	}
}
</script>
</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome <?php echo $nm; ?>, <a href="http://localhost/furniture/">Visit site</a> | <a href="logout.php" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
	 <div class="menu">
                   <?php
						include("menu.php");
					?>
     </div> 
    <div class="center_content">  
    <div class="left_content">
    
    		<div class="sidebar_search">
            <form>
            <input type="text" name="" class="search_input" value="search keyword" onclick="this.value=''" />
            <input type="image" class="search_submit" src="images/search.png" />
            </form>            
            </div>
    
            <div class="sidebarmenu">
            	
               <?php
					include("sidebar.php");
				?>
                    
            </div> 
    </div>  
    <div class="right_content">        
     <h2>Manage Branch Details</h2>
         <div class="form">
         <form method="post" name="frm3" onsubmit="return validate_frm();">
         <table align="center" cellpadding="5" cellspacing="5">		
		<tr>
		<th>Branch Name:</th>
		<td><input type="text" name="bname" size="50" onblur="return checkbname();" value="<?php echo $r['br_name']; ?>"/></td>
		</tr>
		
		<tr>
		<th>Branch Address:</th>
		<td><textarea name="badd" cols="35" rows="5" onblur="return checkadd();"/><?php echo $r['br_address']; ?></textarea></td>
		</tr>
		
		<tr>
		<th>Country:</th>
		<td><select name="country" id="country" onchange="a(this.value)">
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
		<th>State:</th>
		<td><select name="state" id="state" onchange="b(this.value)">
		<option value="">Select</option>
		<?php
			if(isset($_REQUEST['edit_id']))
			{
				$obj=new control();
				$ses = $obj->selst();				
				while($r_st = mysql_fetch_array($ses))
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
		<th>City:</th>
		<td><select name="city" id="city">
		<option value="">Select</option>
		<?php
			if(isset($_REQUEST['edit_id']))
			{
				$obj=new control();
				$sec = $obj->selct();				
				while($r_ct = mysql_fetch_array($sec))
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
		<th>Branch Incharge:</th>
		<td><input type="text" name="binc" size="50" onblur="return checkinc();" value="<?php echo $r['br_incharge']; ?>"/></td>
		</tr>
	
		<tr>
		<th>Branch Mobile:</th>
		<td><input type="text" name="bmob" size="50" maxlength="10" onblur="return checkmob();" value="<?php echo $r['br_mobile']; ?>"/></td>
		</tr>
	
		<tr>
		<th>Branch Phone:</th>
		<td><input type="text" name="bpho" size="50" onblur="return checkphone();" value="<?php echo $r['br_phone']; ?>"/></td>
		</tr>
	
		<tr>
		<th>Branch Email:</th>
		<td><input type="text" name="bemail" size="50" onblur="return checkEmail();" value="<?php echo $r['br_email']; ?>"/></td>
		</tr>
		
		<tr>
		<th>Branch FAX:</th>
		<td><input type="text" name="bfax" size="50" onblur="return checkfax();" value="<?php echo $r['br_fax']; ?>"/></td>
		</tr>

		<tr>
		<?php
		if(isset($_REQUEST['edit_id']))
		{
		?>
		<th>&nbsp;&nbsp;<input type="submit" name="update" value="Update" class="update-login"/></th>
		<td>&nbsp;&nbsp;<input type="reset" name="clear" value="Clear" class="clear-login"/></td>
		<?php
		}
		else
		{
		?>
		<th>&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" class="submit-login"/></th>
		<td>&nbsp;&nbsp;<input type="reset" name="clear" value="Clear" class="clear-login"/></td>
		<?php
		}
		?>
		</tr>
		
		<tr>
			<th colspan="2"><a href="viewbranch.php">View Branch Details</a></th>
		</tr>
		</table>
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer">IN ADMIN PANEL</div>
    	<div class="right_footer"><a href="http://indeziner.com"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
</html>