<?php

include("control.php");

//registration admin
if(isset($_REQUEST['submit']))
{
	$un = $_REQUEST['uname'];
	$ps = $_REQUEST['pass'];
	$em = $_REQUEST['email'];
	
	$obj=new control();
	$i = $obj->insertad($un,$ps,$em);
	header("location:index.php");
}	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL | Registration Page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
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

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<script type="text/javascript" language="javascript">
function validate_frm()
{
	var un=document.frm1.uname;
	var ps=document.frm1.pass;
	var em=document.frm1.email;
	
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
	if(em.value=="")
	{
		alert("Email Address field can not be empty");
		em.focus();
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
	var pass=document.frm1.pass;
	var filter=/^[a-zA-Z0-9]+$/;
	if(!filter.test(pass.value) || pass.value.length<2 || pass.value.length>10)
	{
		alert("Password can not contain special characters and must be between 2 to 10 characters' length");
		pass.focus();
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
</script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header_login">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

     
         <div class="login_form">
         
         <h3>Admin Panel Registration</h3>
         
         <a href="index.php" class="forgot_pass">Admin Login</a> 
         <a href="#" class="forgot_pass">Forgot password</a>
         <form action="" method="post" name="frm1" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" name="uname" id="" size="54" onblur="return checkuname();"/></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="pass" id="" size="54" onblur="return checkpass();"/></dd>
                    </dl>
					<dl>
                        <dt><label for="email">Email ID:</label></dt>
                        <dd><input type="text" name="email" id="" size="54" onblur="return checkEmail();"/></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                        <dd>
                    <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Remember me</label>
                        </dd>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Enter" />
                     </dl>
                    
                </fieldset>
                
         </form>
		 
         </div>  
          
	
    
    <div class="footer_login">
    
    	<div class="left_footer_login">IN ADMIN PANEL</div>
    	<div class="right_footer_login"><a href="http://indeziner.com"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
</html>