<?php
session_start();
error_reporting(0);
	include("control.php");
	$nm = $_SESSION['name'];
	
//insert sub category details
if(isset($_REQUEST['submit']))
{
	$ca = $_REQUEST['category'];
	$su = $_REQUEST['subcatn'];
	
	$obj=new control();
	$ic = $obj->insuc($ca,$su);
	header("location:vsubcat.php");
}

//fetch sub category details
if(isset($_REQUEST['edit_id']))
{
	$e = $_REQUEST['edit_id'];
	$obj=new control();
	$secb = $obj->selsbc($e);
	$r=mysql_fetch_array($secb);
}

//update sub category details
if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
{
	$e = $_REQUEST['edit_id'];
	$ca = $_REQUEST['category'];
	$su = $_REQUEST['subcatn'];
	
	$obj=new control();
	$upb = $obj->upsbca($e,$ca,$su);
	header("location:vsubcat.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL | Manage Sub Category</title>
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
function validate_frm()
{
	var ca=document.frm9.category;
	var su=document.frm9.subcatn;
	
	if(ca.value=="")
	{
		alert("Please select Category field");
		ca.focus();
		return false;
	}
	if(su.value=="")
	{
		alert("Sub Category field can not be empty");
		su.focus();
		return false;
	}
}

function checksname()
{
	var name=document.frm9.subcatn;
	var filter=/^[a-zA-Z0-9.() ]+$/;
	if(!filter.test(name.value))
	{
		alert("Sub Category Name can not contain special characters");
		name.focus();
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
     <h2>Manage Sub Category Details</h2>
         <div class="form">										
<form method="post" name="frm9" onsubmit="return validate_frm();">

	<table align="center" cellpadding="5" cellspacing="5">	
		<tr>
		<th>Select Category:</th>
		<td><select name="category">
		<?php
			$obj=new control();
			$secs = $obj->selcsu();
		?>	
		<option value="">Select</option>
		<?php
		while($rw=mysql_fetch_array($secs))
		{
			if($rw['cat_id']==$r['cat_id'])
			{
		?>
		<option value="<?php echo $rw['cat_id']; ?>" selected="selected"><?php echo $rw['cat_name']; ?></option>
		<?php
			}
			else
			{
		?>
		<option value="<?php echo $rw['cat_id']; ?>"><?php echo $rw['cat_name']; ?></option>
		<?php
			}
		}
		?>
		</select></td>
		</tr>
			
		<tr>
		<th>Sub Category Name:</th>
		<td><input type="text" name="subcatn" size="50" onblur="return checksname();" value="<?php echo $r['sub_name']; ?>"/></td>
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
			<th align="center" colspan="2"><a href="vsubcat.php">View Sub Category Details</a></th>
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