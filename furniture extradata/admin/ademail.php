<?php   
 session_start();
 include("config/config.php");
 if(isset($_SESSION['admin']))
 {
  $username=$_SESSION['admin'];
 //echo "Admin name :".$username;
 } else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  window.location='adlogin.php';
 </script>
 <?php
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script type="text/javascript" src="js/functions.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/count.js"></script>
 <script type="text/javascript" src="#"></script>
 <script language="javascript">
 // function for comfirm box !!
  function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
    return false;
   }
   else
   {
    alert(window.location='adlogout.php');
   }
  }
  function check()
  {
   if(document.getElementById("email").value =="")
   {
    alert('Please Enter Email ID !!'); 
    document.getElementById("email").focus();
    return false;
   }
   if(document.getElementById("password").value =="")
   {
    alert('Please Enter Password !!');
    document.getElementById("password").focus();
    return false;
   }
   if(isEmail(document.getElementById("email").value) == false)
   {
    alert("Enter valid E-mail ID !!");
    document.getElementById("email").focus();
    return false;
   }
  }
 </script>  

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Online Shopping</title>
 <link href="css/online.css" rel="stylesheet" type="text/css" />
 <style type="text/css" media="all">
  @import "online.css";
 </style>
</head>

<body>
    <div id="wrapper">
         <?php
  include "Header.php";
  ?>
  <div id="mainContent">
    <div id="mainContent1">
    <div id="middletxtheadermain">
      <div id="middletxtheader">&nbsp;</div>
      <div id="middletxt1">
        <p>Change your Email Here.</p>
      </div>
      </div>
      <div id="middletxt">
        <form action="" method="post" name="frm_email" id="frm_email" enctype="multipart/form-data">
          <table width="100%" border=0>
            <tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear">Enter Details.</th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Mandatory	Fields &nbsp; </span></div></td>
                  </tr>
                  <input type="hidden" name="username" id="username" value="" />
                  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Email : </strong></div></td>
                    <td width="128"><input type="textbox" name="email" id="email" maxlength="30"  value="" style="width:176px;"
                                           onChange="document.getElementById('email').value=trim(this.value);"/>
                  </tr>
                  <tr>
                    <td><div align="right"><strong><font color="#FF0000">*</font>Password : </strong></div></td>
                    <td width="128"><input type="password" name="password" id="password"  value="" maxlength="10" style="width:176px;"
                                      onchange="document.getElementById('password').value=trim(this.value);"/></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3" >&nbsp;&nbsp;&nbsp;<!--Onclick="return done(this.form);"-->
                      <input type="submit"  id="submit" name="submit" value="Change" Onclick="return check(this.form);" > 
                      &nbsp;&nbsp;&nbsp;
                      <input type="reset" id="subintr" name="subintr" value="Reset"  /></td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </form>
        <!-- end #middletxt -->
      </div>
    </div>
    <!-- end #mainContent -->
  </div>
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <div id="footer">
    (C) Copyright Rishi Systems P. Limited
    <!-- end #footer -->
  </div>
  <!-- end #container -->
</div>

<!-- Code for inserting into data base -->
 <?php
  if(isset($_POST['submitMain']))
  {
   $email=$_POST['txt_email'];
   $password=$_POST['txt_password'];
   
   $get= @mysql_query("SELECT * FROM t_admin_mst WHERE adm_username= '$username' ")or die(mysql_error());
   $num= @mysql_num_rows($get);
   for($i=0;$i<$num;$i++)
   {
    $old_password= @mysql_result($get,$i,'adm_password');
   }
   if($password==$old_password)
   {
    $query = mysql_query("UPDATE t_admin_mst SET adm_email='$email' WHERE adm_username='$username' ")
                           or die(mysql_error());
    echo "<script>alert('Email Changed sucessfully !!');</script>";
   } else {
     echo "<script>alert('Password Wrong !!');</script>";
   }
  }
?>
   	  <?php
  include "Footer.php";
  ?>
</body>
</html>