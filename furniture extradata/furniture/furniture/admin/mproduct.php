<?php
session_start();
error_reporting(0);
	include("control.php");
	$nm = $_SESSION['name'];
	
//insert product details
if(isset($_REQUEST['submit']))
{
	$ca = $_REQUEST['category'];
	$su = $_REQUEST['subcat'];
	$pn = $_REQUEST['proname'];
	$pp = $_REQUEST['proprice'];
	$mn = $_REQUEST['mno'];
	$pc = $_REQUEST['procode'];
	$pi = $_FILES['photo']['name'];
	$pd = $_REQUEST['prodesc'];
	$pcol = $_REQUEST['procolor'];
	$pw = $_REQUEST['prowar'];
	$pq = $_REQUEST['proquan'];
			
	$obj=new control();
	$ip = $obj->inpr($ca,$su,$pn,$pp,$mn,$pc,$pi,$pd,$pcol,$pw,$pq);
	move_uploaded_file($_FILES['photo']['tmp_name'],"photo/".$_FILES['photo']['name']);	
	header("location:vproduct.php");	
}

//fetch product details
if(isset($_REQUEST['edit_id']))
{
	$e = $_REQUEST['edit_id'];
	$obj=new control();
	$sep = $obj->sepro($e);
	$r=mysql_fetch_array($sep);
}

//update product details
if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
{
	$e = $_REQUEST['edit_id'];
	$ca = $_REQUEST['category'];
	$su = $_REQUEST['subcat'];
	$pn = $_REQUEST['proname'];
	$pp = $_REQUEST['proprice'];
	$mn = $_REQUEST['mno'];
	$pc = $_REQUEST['procode'];
	$pi = $_FILES['photo']['name'];
	$pd = $_REQUEST['prodesc'];
	$pcol = $_REQUEST['procolor'];
	$pw = $_REQUEST['prowar'];
	$pq = $_REQUEST['proquan'];
	
	$obj=new control();
	$upr = $obj->uppr($e,$ca,$su,$pn,$pp,$mn,$pc,$pi,$pd,$pcol,$pw,$pq);
	move_uploaded_file($_FILES['photo']['tmp_name'],"photo/".$_FILES['photo']['name']);	
	header("location:vproduct.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL | Manage Product</title>
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
	var ca=document.frm11.category;
	var su=document.frm11.subcat;
	var pn=document.frm11.proname;
	var pp=document.frm11.proprice;
	var mn=document.frm11.mno;
	var pc=document.frm11.procode;
	var pi=document.frm11.photo;
	var pd=document.frm11.prodesc;
	var pcol=document.frm11.procolor;
	var pw=document.frm11.prowar;
	var pq=document.frm11.proquan;
	
	if(ca.value=="")
	{
		alert("Please select Category field");
		ca.focus();
		return false;
	}
	if(su.value=="")
	{
		alert("Please select Sub Category field");
		su.focus();
		return false;
	}
	if(pn.value=="")
	{
		alert("Product Name field can not be empty");
		pn.focus();
		return false;
	}
	if(pp.value=="")
	{
		alert("Product Price field can not be empty");
		pp.focus();
		return false;
	}
	if(mn.value=="")
	{
		alert("Model No field can not be empty");
		mn.focus();
		return false;
	}
	if(pc.value=="")
	{
		alert("Product Code field can not be empty");
		pc.focus();
		return false;
	}
	if(pi.value=="")
	{
		alert("Please select Product Image");
		pi.focus();
		return false;
	}
	if(pd.value=="")
	{
		alert("Product Description field can not be empty");
		pd.focus();
		return false;
	}
	if(pcol.value=="")
	{
		alert("Product Color field can not be empty");
		pcol.focus();
		return false;
	}
	if(pw.value=="")
	{
		alert("Product Warranty field can not be empty");
		pw.focus();
		return false;
	}
	if(pq.value=="")
	{
		alert("Product Quantity field can not be empty");
		pq.focus();
		return false;
	}
}

function checkpname()
{
	var name=document.frm11.proname;
	var filter=/^[a-zA-Z0-9.() ]+$/;
	if(!filter.test(name.value))
	{
		alert("Product Name can not contain special characters");
		name.focus();
		return false;
	}
}

function checkprice()
{
	var price=document.frm11.proprice;
	var filter=/^[0-9a-zA-Z,- ]+$/;
	if(!filter.test(price.value))
	{
		alert("Product Price can not contain special characters");
		price.focus();
		return false;
	}
}

function checkmno()
{
	var mno=document.frm11.mno;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(mno.value))
	{
		alert("Model No can not contain special characters");
		mno.focus();
		return false;
	}
}

function checkpcode()
{
	var code=document.frm11.procode;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(code.value))
	{
		alert("Product Code can not contain special characters");
		code.focus();
		return false;
	}
}

function checkdesc()
{
	var desc=document.frm11.prodesc;
	var filter=/^[a-zA-Z0-9.-,() ]+$/;
	if(!filter.test(desc.value))
	{
		alert("Product Description can not contain special characters");
		desc.focus();
		return false;
	}
}

function checkcol()
{
	var col=document.frm11.procolor;
	var filter=/^[a-zA-Z0-9.,() ]+$/;
	if(!filter.test(col.value))
	{
		alert("Product Color can not contain special characters");
		col.focus();
		return false;
	}
}

function checkwar()
{
	var war=document.frm11.prowar;
	var filter=/^[a-zA-Z0-9 ]+$/;
	if(!filter.test(war.value))
	{
		alert("Product Warranty can not contain special characters");
		war.focus();
		return false;
	}
}

function checkquan()
{
	var quan=document.frm11.proquan;
	var filter=/^[0-9 ]+$/;
	if(!filter.test(quan.value))
	{
		alert("Product Quantity can not contain special characters");
		quan.focus();
		return false;
	}
}

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
     <h2>Manage Product Details</h2>
         <div class="form">						
<form method="post" name="frm11" enctype="multipart/form-data" onsubmit="return validate_frm();">

	<table align="center" cellpadding="5" cellspacing="5">			
		<tr>
		<th>Select Category:</th>
		<td><select name="category" id="category" onChange="a(this.value)">
		<?php
			$obj=new control();
			$set = $obj->semcat();
		?>	
		<option value="">Select</option>
		<?php
		while($rwc=mysql_fetch_array($set))
		{
			if($rwc['cat_id']==$r['cat_id'])
			{
		?>
		<option value="<?php echo $rwc['cat_id']; ?>" selected="selected"><?php echo $rwc['cat_name']; ?></option>
		<?php
			}
			else
			{
		?>
		<option value="<?php echo $rwc['cat_id']; ?>"><?php echo $rwc['cat_name']; ?></option>
		<?php
			}
		}
		?>
		</select></td>
		</tr>		
		
		<tr>
		<th>Select Sub Category:</th>
		<td><select name="subcat" id="subcat" onChange="b(this.value)">		
		<option value="">Select</option>
		<?php
		if(isset($_REQUEST['edit_id']))
		{
			$obj=new control();
			$sec = $obj->sesucat();
			while($rw=mysql_fetch_array($sec))
			{
				if($rw['sub_id']==$r['sub_id'])
				{
			?>
			<option value="<?php echo $rw['sub_id']; ?>" selected="selected"><?php echo $rw['sub_name']; ?></option>
			<?php
				}
				else
				{
			?>
			<option value="<?php echo $rw['sub_id']; ?>"><?php echo $rw['sub_name']; ?></option>
			<?php
				}
			}
		}
		?>
		</select></td>
		</tr>
			
		<tr>
		<th>Product Name:</th>
		<td><input type="text" name="proname" size="50" maxlength="30" onblur="return checkpname();" value="<?php echo $r['pro_name']; ?>"/></td>
		</tr>		
		
		<tr>
		<th>Product Price (Rs.):</th>
		<td><input type="text" name="proprice" size="50" maxlength="20" onblur="return checkprice();" value="<?php echo $r['pro_price']; ?>"/></td>
		</tr>
		
		<tr>
		<th>Model Number:</th>
		<td><input type="text" name="mno" size="50" maxlength="10" onblur="return checkmno();" value="<?php echo $r['model_no']; ?>"/></td>
		</tr>
		
		<tr>
		<th>Product Code:</th>
		<td><input type="text" name="procode" size="50" maxlength="10" onblur="return checkpcode();" value="<?php echo $r['pro_code']; ?>"/></td>
		</tr>
		
		<tr>
		<th>Product Image:</th>
		<td><input type="file" name="photo" onblur="return checksname();" value="photo/<?php echo $r['photo']; ?>"/></td>
		</tr>
		
		<tr>
		<th>Product Description:</th>
		<td><textarea name="prodesc" cols="40" rows="5" onblur="return checkdesc();" ><?php echo $r['pro_desc']; ?></textarea></td>
		</tr>
		
		<tr>
		<th>Product Color:</th>
		<td><input type="text" name="procolor" size="50" onblur="return checkcol();" value="<?php echo $r['pro_color']; ?>"/></td>
		</tr>
		
		<tr>
		<th>Product Warranty:</th>
		<td><input type="text" name="prowar" size="50" maxlength="20" onblur="return checkwar();" value="<?php echo $r['pro_war']; ?>"/></td>
		</tr>
		
		<tr>
		<th>Product Quantity:</th>
		<td><input type="text" name="proquan" size="50" maxlength="5" onblur="return checkquan();" value="<?php echo $r['pro_quan']; ?>"/></td>
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
			<th align="center" colspan="2"><a href="vproduct.php">View Product Details</a></th>
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